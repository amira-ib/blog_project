<?php

namespace App\Http\Controllers;

use App\Article;
use App\Section;
use Faker\Provider\File;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $section_options = Section::pluck('name', 'id');
        return view('admin.articles.create',compact('section_options'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:100',
            'content'=> 'required|string',
        ],
        [
            'title.required'=>'У статьи нет заголовка',
            'description.required'=>'Введите описание статьи',
            'content.required'=>'Содержание статьи пустое'
        ]
        );

        $article = new Article($request->all());
        $article->save();
        if(isset($request->link)){
            $article->link = $request->file('link')->storeAs('images',$article->id);
        }
        $article->save();
        $article->sections()->sync($request->section_list);
        return redirect()->route('article.show',$article->id);
    }

    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->get();
        return view('admin.articles.index',compact('articles'));
    }

    public function show($article_id)
    {
        $article = Article::with('sections')->find($article_id);
        return view('admin.articles.show',compact(['article']));
    }

    public function edit($article_id)
    {
        $section_options = Section::pluck('name', 'id');
//        $sections = Section::all();
        $article = Article::find($article_id);
        return view('admin.articles.edit',compact(
            'article',
            'section_options'
        ));
    }

    public function update(Request $request,$article_id){
        $this->validate(request(),[
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:100',
            'content'=> 'required|string',
        ],
        [
            'title.required'=>'У статьи нет заголовка',
            'description.required'=>'Введите описание статьи',
            'content.required'=>'Содержание статьи пустое',
        ]
        );
        $article = Article::find($article_id);
        $article->sections()->sync($request->section_list, []);
        $article->update($request->all());

        if (isset($request->link)) {
            $article->link = $request->file('link')->storeAs('images',$article->id);
        }

        $article->save();
        return redirect()->route('article.show',$article_id);
    }

    public function destroy($article_id)
    {
        $article = Article::find($article_id);
        $image_path = public_path('images/'. $article->link);
        if (\File::exists($image_path)) {
            \File::delete($image_path);
        }
        Article::destroy($article_id);
        return redirect()->back();
    }
}

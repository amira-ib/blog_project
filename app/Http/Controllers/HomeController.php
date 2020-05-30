<?php

namespace App\Http\Controllers;

use App\Article;
use App\Section;
use App\Subscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->get();
        $sections = Section::all();
        return view('blog.home.index',['articles' => $articles,'sections' => $sections]);
    }

    public function articleShow($article_id)
    {
        $article = Article::find($article_id);
        $sections = Section::all();
        return view ('blog.articles.show',compact(['article','sections']));
    }

    public function sectionArticles($section_name,$section_id)
    {
        $section = Section::with('articles')->find($section_id);
        $articles = $section->articles()->orderBy('created_at','DESC')->get();
        $sections = Section::all();
        return view('blog.home.index',compact(['articles','sections']));
    }


}

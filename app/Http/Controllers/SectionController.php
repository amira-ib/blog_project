<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class SectionController extends Controller
{
    public function create()
    {
        return view('admin.sections.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),
         [
            'name'=>'required',
         ],
        [
            'name.unique'=>'sorry'
        ]);

        try{
            $section = new Section($request->all());
            $section->save();

        }
        catch (QueryException $e){
        }
        return redirect()->route('section.index');
    }

    public function show($section_id)
    {
        $section = Section::with('articles')->find($section_id);
        return view('admin.sections.show',compact('section'));
    }

    public function index()
    {
        $sections = Section::orderBy('created_at','DESC')->get();
        return view('admin.sections.index',compact('sections'));
    }

    public function edit($section_id)
    {
        $sections = Section::find($section_id);
        return view('admin.sections.edit',compact('sections'));
    }

    public function update(Request $request,$section_id)
    {
        $section = Section::find($section_id);
        $section->update($request->all());
        $section->save();
        return redirect()->route('section.index');
    }

    public function destroy($section_id)
    {
        Section::destroy($section_id);
        return redirect()->back();
    }
}

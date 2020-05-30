<?php

namespace App\Http\Controllers;

use App\Font;
use Illuminate\Http\Request;

class FontController extends Controller
{
    public function index()
    {
        $fonts = Font::all();
        return view('admin.fonts.index',compact('fonts'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
           'link'=>'required'
        ],
        [
            'link.required'=>'Фотография не добавлена'
        ]
        );

        $font = new Font($request->all());
        $font->save();
        $font->link = $request->file('link')->storeAs('fonts',$font->id);
        $font->save();
        return redirect()->route('font.index');
    }


}

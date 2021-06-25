<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class comicController extends Controller
{
    function create(){
        return view("create");
    }
    public function store(Request $request){
        $comicData = $request->all();
        
        $newComic = new Comic();
        $newComic->fill($comicData);
        $newComic->save();
        return redirect()->route('comic.show',$newComic->id);
    }

    function show($id){
        $comic = Comic::find($id);
        return view("show",compact("comic"));
    }

    function update(Request $request, $id){
        $comic = Comic::findOrFail($id);
        $formData = $request->all();
        $request->validate([
            "title"=> "required|max:255",
        ]);
        $comic->update($formData);
        return redirect()->route("comic.show", $comic->id);
    }
    function edit($id){
        $comic = Comic::findOrFail($id);
        return view("edit",compact("comic"));
    }
}

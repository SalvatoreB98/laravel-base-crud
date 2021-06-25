<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class comicController extends Controller
{
    function create(){
        return view("create");
    }
    function show($id){
        $comic = Comic::find($id);
        return view("show",compact("comic"));
    }
    public function store(Request $request){
        $comicData = $request->all();
        
        $newComic = new Comic();
        $newComic->fill($comicData);
        $newComic->save();
        return redirect()->route('comic.show',$newComic->id);

    }
}

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
        
        return view("show");
    }
    public function store(Request $request){
        $comicData = $request->all();
        
        $newComic = new Comic();
        $newComic->title = $request['title'];
        $newComic->description = $request['description'];
        $newComic->thumb = $request['thumb'];
        $newComic->price = $request['price'];
        $newComic->series = $request['series'];
        $newComic->sale_date = $request['sale_date'];
        $newComic->type = $request['type'];
        $newComic->save();
        return redirect()->route('comic.show',$newComic->id);

    }
}

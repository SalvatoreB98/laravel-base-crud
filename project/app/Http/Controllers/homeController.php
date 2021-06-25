<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        $comics = Comic::all();
        return view('home',["comics"=> $comics]);
    }
}

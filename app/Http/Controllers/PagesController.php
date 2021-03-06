<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        $name = "Krishman";
        $nameList = [
            'John', 'Harry', 'Jim', 'Solomon'
        ];
        $games = [];
        return view('about', compact('name', 'nameList', 'games'));
    }
}

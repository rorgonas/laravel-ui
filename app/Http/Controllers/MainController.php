<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
    * Display Main Page
    */
    public function show(){
        $title = 'UI Laravel';
        return view('pages/main', ['title' => $title]);
    }
}
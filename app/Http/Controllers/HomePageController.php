<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
    * Display Home Page
    */
    public function show(){
        return view('sample/pages/home');
    }
}
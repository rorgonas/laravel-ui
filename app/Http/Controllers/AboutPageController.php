<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    /**
    * Display About Page
    */
    public function show(){
        return view('sample/pages/about');
    }
}
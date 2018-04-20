<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    /**
    * Display Contact Page
    */
    public function show(){
        return view('sample/pages/contact');
    }
}
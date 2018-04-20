<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    /**
    * Display Gallery Page
    */
    public function show(){
        return view('sample/pages/gallery');
    }
}
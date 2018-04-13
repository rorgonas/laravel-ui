<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MVGirlsController extends Controller
{
    /**
    * Display Themes
    */
    public function show(){
        $title = 'MV Girls';
        $persons = [
                (object)['name' => 'lilcanadiangirl', 'url' => 'https://d2adpaynhf6x63.cloudfront.net/php_uploads/profile/lilcanadiangirl/image/thumbnail_1514847242.jpg'],
                (object)['name' => 'lilcanadiangirl', 'url' => 'https://d2adpaynhf6x63.cloudfront.net/php_uploads/profile/lilcanadiangirl/image/thumbnail_1514847242.jpg'],
                (object)['name' => 'lilcanadiangirl', 'url' => 'https://d2adpaynhf6x63.cloudfront.net/php_uploads/profile/lilcanadiangirl/image/thumbnail_1514847242.jpg']
            ];
        return view('pages/mv-girls', compact('title', 'persons'));
    }
}

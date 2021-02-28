<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        echo "Halaman artikel dengan id $id";
    }

    public function news(){
        return view('news')
                    ->with('page', 'News')
                    ->with('url', 'news');
    }

    public function newsString($string){
        return view('news')
                    ->with('page', 'News ' . $string)
                    ->with('url', 'news/' . $string);
    }
}
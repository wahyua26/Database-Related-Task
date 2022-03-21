<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "title" => "Halaman Utama Artikel",
            "name" => "Aji Wahyu Admaja Utama",
            "email" => "ajiwahyu917@gmail.com",
            //"articles" =>  Article::all()
            "articles" =>  Article::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }

}

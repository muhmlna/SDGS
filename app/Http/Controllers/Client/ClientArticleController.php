<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ClientArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest('id')->take(3)->get();
        return view('client.article', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('client.article-details', compact('article'));
    }

}

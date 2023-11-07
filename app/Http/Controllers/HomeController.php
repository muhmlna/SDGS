<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Galery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event = Event::all()->count();
        $article = Article::all()->count();
        $journal = Journal::all()->count();
        $galery = Galery::all()->count();
        $articles = Article::latest('id')->take(3)->get();
        return view('client.index', compact('event', 'article', 'journal', 'galery', 'articles'));
    }
}

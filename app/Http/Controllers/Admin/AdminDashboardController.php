<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Galery;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {

        $event = Event::all()->count();
        $article = Article::all()->count();
        $journal = Journal::all()->count();
        $galery = Galery::all()->count();
        return view('admin.dashboard', compact('event', 'article', 'journal', 'galery'));
    }
}

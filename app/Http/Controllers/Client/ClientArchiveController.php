<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use Illuminate\Http\Request;

class ClientArchiveController extends Controller
{
    public function index()
    {
        $archives = Archive::all();
        return view('client.archive', compact('archives'));
    }

    public function show($id)
    {
        $archive = Archive::findOrFail($id);
        return view('client.archive.read', compact('archive'));
    }
    
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class ClientJournalController extends Controller
{
    public function index()
    {
        $journals = Journal::all();
        return view('client.journal', compact('journals'));
    }

    public function show($id)
    {
        $journal = Journal::findOrFail($id);
        return view('client.journal.read', compact('journal'));
    }

}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ClientEventController extends Controller
{
    public function index()
    {
        $events = Event::latest('id')->take(4)->get();
        return view('client.event', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('client.event.read', compact('event'));
    }

}

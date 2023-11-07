<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;

class ClientOurteamController extends Controller
{

    public function index()
    {
        $ourteams = Ourteam::all();
        return view('client.ourteam', compact('ourteams'));
    }

}

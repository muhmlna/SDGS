<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;

class ClientOurteamController extends Controller
{

    public function show($id)
    {
        $ourteam = Ourteam::findOrFail($id);
        return view('client.ourteam', compact('ourteam'));
    }

}

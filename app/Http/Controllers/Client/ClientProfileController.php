<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ClientProfileController extends Controller
{

    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('client.profile', compact('profile'));
    }

}

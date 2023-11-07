<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class ClientGaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::latest('id')->take(9)->get();
        return view('client.galery', compact('galeries'));
    }

    public function show($id)
    {
        $galery = Galery::findOrFail($id);
        return view('client.galery.read', compact('galery'));
    }

}

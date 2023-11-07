<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;

class AdminOurteamController extends Controller
{

    public function edit($id)
    {
        $ourteam = Ourteam::findOrFail($id);
        return view('admin.ourteam.update', compact('ourteam'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|max:2048',
        ]);

        $ourteam = Ourteam::findOrFail($id);
        $ourteam->update($request->all());

        return redirect()->route('admin.ourteam.index')->with('sukses', 'Berhasil Edit Data!');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin.profile.update', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $profile = Profile::findOrFail($id);
        $profile->update($request->all());

        return redirect()->route('admin.profile.index')->with('sukses', 'Berhasil Edit Data!');
    }

}

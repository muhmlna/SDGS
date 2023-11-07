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
            'isi' => 'required|max:255',
        ]);

        $profile = Profile::findOrFail($id);
        $profile->update($request->all());

        return redirect('/admin/profile/1/edit')->with('sukses', 'Berhasil Edit Data!');
    }

}

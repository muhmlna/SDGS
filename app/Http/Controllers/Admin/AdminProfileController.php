<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.profile.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        Profile::create($request->all());

        return redirect()->route('admin.profile.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin.profile.read', compact('profile'));
    }

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

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->route('admin.profile.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

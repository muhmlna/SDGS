<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;

class AdminOurteamController extends Controller
{
    public function index()
    {
        $ourteams = Ourteam::all();
        return view('admin.ourteam.index', compact('ourteams'));
    }

    public function create()
    {
        return view('admin.ourteam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        Ourteam::create($request->all());

        return redirect()->route('admin.ourteam.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $ourteam = Ourteam::findOrFail($id);
        return view('admin.ourteam.read', compact('ourteam'));
    }

    public function edit($id)
    {
        $ourteam = Ourteam::findOrFail($id);
        return view('admin.ourteam.update', compact('ourteam'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
        ]);

        $ourteam = Ourteam::findOrFail($id);
        $ourteam->update($request->all());

        return redirect()->route('admin.ourteam.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $ourteam = Ourteam::findOrFail($id);
        $ourteam->delete();

        return redirect()->route('admin.ourteam.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

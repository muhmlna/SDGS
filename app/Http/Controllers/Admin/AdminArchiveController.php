<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use Illuminate\Http\Request;

class AdminArchiveController extends Controller
{
    public function index()
    {
        $archives = Archive::all();
        return view('admin.archive.index', compact('archives'));
    }

    public function create()
    {
        return view('admin.archive.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|max:255',
            'link' => 'required',
        ]);

        Archive::create($request->all());

        return redirect()->route('admin.archive.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $archive = Archive::findOrFail($id);
        return view('admin.archive.read', compact('archive'));
    }

    public function edit($id)
    {
        $archive = Archive::findOrFail($id);
        return view('admin.archive.update', compact('archive'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required|max:255',
            'link' => 'required',
        ]);

        $archive = Archive::findOrFail($id);
        $archive->update($request->all());

        return redirect()->route('admin.archive.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $archive = Archive::findOrFail($id);
        $archive->delete();

        return redirect()->route('admin.archive.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

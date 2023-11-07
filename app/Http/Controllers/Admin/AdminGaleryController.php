<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class AdminGaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::all();
        return view('admin.galery.index', compact('galeries'));
    }

    public function create()
    {
        return view('admin.galery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|max:2048',
        ]);

        Galery::create($request->all());

        return redirect()->route('admin.galery.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $galery = Galery::findOrFail($id);
        return view('admin.galery.read', compact('galery'));
    }

    public function edit($id)
    {
        $galery = Galery::findOrFail($id);
        return view('admin.galery.update', compact('galery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|max:2048',
        ]);

        $galery = Galery::findOrFail($id);
        $galery->update($request->all());

        return redirect()->route('admin.galery.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $galery = Galery::findOrFail($id);
        $galery->delete();

        return redirect()->route('admin.galery.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

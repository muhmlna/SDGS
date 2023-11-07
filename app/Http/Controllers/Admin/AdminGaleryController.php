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
        $galery = Galery::create();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $galery->gambar = $nama_file;
            $galery->update();
            $gambar->move(public_path('assets/galery/'), $nama_file);
        }

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
        $galery = Galery::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            
            // Simpan nama file gambar ke dalam kolom 'gambar'
            $galery->gambar = $nama_file;
            
            // Simpan perubahan ke dalam database
            $galery->save();
            
            // Pindahkan file gambar ke direktori yang ditentukan
            $gambar->move(public_path('assets/galery/'), $nama_file);
        }

        return redirect()->route('admin.galery.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $galery = Galery::findOrFail($id);
        $galery->delete();

        return redirect()->route('admin.galery.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

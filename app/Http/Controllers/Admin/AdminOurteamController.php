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
    // Menggunakan metode findOrFail untuk menemukan Ourteam yang akan diperbarui
    $ourteam = Ourteam::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $nama_file = time() . '_' . $gambar->getClientOriginalName();
        
        // Simpan nama file gambar ke dalam kolom 'gambar'
        $ourteam->gambar = $nama_file;
        
        // Simpan perubahan ke dalam database
        $ourteam->save();
        
        // Pindahkan file gambar ke direktori yang ditentukan
        $gambar->move(public_path('assets/ourteam/'), $nama_file);
    }

    return redirect('/admin/ourteam/1/edit')->with('sukses', 'Berhasil Edit Data!');
}


}

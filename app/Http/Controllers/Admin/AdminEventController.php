<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $event = Event::create([
            'nama' => $request->nama,
            'isi' => $request->isi,
            'link' => $request->link,
            'status' => $request->status,
            'tgl_event' => $request->tgl_event
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $event->gambar = $nama_file;
            $event->update();
            $gambar->move(public_path('assets/event/'), $nama_file);
        }

        return redirect()->route('admin.event.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.read', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.update', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'link' => 'required',
            'status' => 'required',
            'tgl_event' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $event->gambar = $nama_file;
            $event->update();
            $gambar->move(public_path('assets/event/'), $nama_file);
        }

        return redirect()->route('admin.event.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.event.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

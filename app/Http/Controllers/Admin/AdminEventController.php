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
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'link' => 'required',
        ]);

        Event::create($request->all());

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
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'link' => 'required',
        ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect()->route('admin.event.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.event.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

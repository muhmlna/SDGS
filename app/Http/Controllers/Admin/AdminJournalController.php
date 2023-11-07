<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminJournalController extends Controller
{
    public function index()
    {
        $journals = Journal::all();
        return view('admin.journal.index', compact('journals'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.journal.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'link' => 'required',
            'category_id' => 'required'
        ]);

        Journal::create($request->all());

        return redirect()->route('admin.journal.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $journal = Journal::findOrFail($id);
        return view('admin.journal.read', compact('journal'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $journal = Journal::findOrFail($id);
        return view('admin.journal.update', compact('journal', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'link' => 'required',
            'category_id' => 'required'
        ]);

        $journal = Journal::findOrFail($id);
        $journal->update($request->all());

        return redirect()->route('admin.journal.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $journal = Journal::findOrFail($id);
        $journal->delete();

        return redirect()->route('admin.journal.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

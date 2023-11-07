<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'required|max:2048',
        ]);

        Article::create($request->all());

        return redirect()->route('admin.article.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.read', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.update', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'required|max:2048',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect()->route('admin.article.index')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.article.index')->with('sukses', 'Berhasil Hapus Data!');
    }
}

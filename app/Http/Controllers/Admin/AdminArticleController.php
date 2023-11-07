<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'category_id' => 'required'
        ]);

        
        $article = Article::create($request->all());

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $article->gambar = $nama_file;
            $article->update();
            $gambar->move(public_path('assets/article/'), $nama_file);
        }
        
        return redirect()->route('admin.article.index')->with('sukses', 'Berhasil Tambah Data!');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.read', compact('article'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $article = Article::findOrFail($id);
        return view('admin.article.update', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();
        $request->validate([
            'nama' => 'required|max:255',
            'isi' => 'required',
            'category_id' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            $article->gambar = $nama_file;
            $article->update();
            $gambar->move(public_path('assets/article/'), $nama_file);
        }

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

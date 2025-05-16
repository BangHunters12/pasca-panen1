<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index()
    {
        $NewsData = News::all();
        return view('admin.berita.index', [
            'beritas' => $NewsData
        ]);
    }

    function create()
    {
        return view('admin.berita.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('gambar_berita', 'public');
        }

        News::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    function destroy(string $id)
    {
        $NewsData = News::findOrFail($id);
        if ($NewsData->gambar && file_exists(storage_path(
            'app/public/gambar+berita'
        ))) {
            unlink(storage_path('app/public/gambar_berita/' . $NewsData->gambar));
        }
        $NewsData->delete();

        return redirect()->route('admin.berita.index');
    }
}

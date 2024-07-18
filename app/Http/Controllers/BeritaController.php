<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('dashboard.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('dashboard.berita.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('berita', 'public');
        }

        Berita::create([
            'judul' => $validatedData['judul'],
            'konten' => $validatedData['konten'],
            'image' => $imagePath,
        ]);

        return redirect('berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show($id)
    {
        return view('dashboard.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::find($id);

        return view('dashboard.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $berita = Berita::find($id);

        if ($request->hasFile('image')) {
            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
            $imagePath = $request->file('image')->store('berita', 'public');
            $validatedData['image'] = $imagePath;
        }

        $berita->update($validatedData);
        return redirect('berita')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }
        $berita->delete();
        return redirect('berita')->with('success', 'Berita berhasil dihapus.');
    }
}

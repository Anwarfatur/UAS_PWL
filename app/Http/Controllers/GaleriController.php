<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();

        // dd($galeri);
        return view('dashboard.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('dashboard.galeri.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('galeri', 'public');
        }

        Galeri::create([
            'foto' => $imagePath,
        ]);

        return redirect('galeri')->with('success', 'galeri berhasil ditambahkan.');
    }

    public function show($id)
    {
        return view('dashboard.galeri.show', compact('galeri'));
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);

        return view('dashboard.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $galeri = Galeri::find($id);

        if ($request->hasFile('image')) {
            if ($galeri->image) {
                Storage::disk('public')->delete($galeri->image);
            }
            $imagePath = $request->file('image')->store('galeri', 'public');
            $validatedData['image'] = $imagePath;
        }

        $galeri->update($validatedData);
        return redirect('galeri')->with('success', 'galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        if ($galeri->image) {
            Storage::disk('public')->delete($galeri->image);
        }
        $galeri->delete();
        return redirect('galeri')->with('success', 'galeri berhasil dihapus.');
    }
}

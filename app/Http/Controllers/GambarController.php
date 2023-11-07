<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Sekolah;
use App\Http\Requests\StoreGambarRequest;
use App\Http\Requests\UpdateGambarRequest;
use Illuminate\Support\Str;
use File;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gambar.index', [
            'active' => 'gambar',
            'call' => 'Foto Penelitian',
            'gambars' => Gambar::orderBy('id_sekolah', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gambar.create', [
            'active' => 'gambar',
            'call' => 'Foto Penelitian',
            'sekolahs' => Sekolah::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGambarRequest $request)
    {
        $validated = $request->validated();
        $validated['file'] = $request->file('file');
        $file = $validated['file']; // Mengambil objek file yang diunggah
        $extension = $file->getClientOriginalExtension();
        $validated['file']->move(public_path() . '/teknis/', $img = 'img_' . Str::random(15) . '.' . $extension);
        $validated['file'] = 'teknis/' . $img;
        Gambar::create($validated);
        return redirect('/dashboard/gambar')->with('success', 'Gambar telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gambar $gambar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGambarRequest $request, Gambar $gambar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gambar $gambar)
    {
        File::delete($gambar['file']);
        Gambar::destroy($gambar->id);
        return redirect('/dashboard/gambar')->with('success', 'Foto Penelitian telah dihapus!');
    }
}

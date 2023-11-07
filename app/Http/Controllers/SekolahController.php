<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Http\Requests\StoreSekolahRequest;
use App\Http\Requests\UpdateSekolahRequest;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sekolah.index', [
            'active' => 'olah_data',
            'call' => 'Olah Data',
            'sekolahs' => Sekolah::orderBy('nama_sekolah', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSekolahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekolah $sekolah)
    {
        return view('dashboard.sekolah.edit', [
            'active' => 'olah_data',
            'call' => 'Olah Data',
            'sekolah' => $sekolah,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSekolahRequest $request, Sekolah $sekolah)
    {
        $validated = $request->validated();
        Sekolah::where('id', $sekolah['id'])->update($validated);
        return redirect('/dashboard/sekolah')->with('success', 'Data Teknis Sekolah telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        //
    }
}

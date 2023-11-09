<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Http\Requests\StoreKecamatanRequest;
use App\Http\Requests\UpdateKecamatanRequest;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kecamatan.create', [
            'active' => 'olah_data',
            'call' => 'Olah Data',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKecamatanRequest $request)
    {
        $validated = $request->validated();
        Kecamatan::create($validated);
        return redirect('/dashboard/sekolah')->with('success', 'Kecamatan telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKecamatanRequest $request, Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kecamatan $kecamatan)
    {
        Kecamatan::destroy($kecamatan->id);
        return redirect('/dashboard/sekolah')->with('success', 'Kecamatan telah dihapus!');
    }
}

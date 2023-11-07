<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use App\Models\Sekolah;
use App\Http\Requests\StorePetaRequest;
use App\Http\Requests\UpdatePetaRequest;
use Illuminate\Support\Str;
use File;

class PetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.peta.index', [
            'active' => 'peta',
            'call' => 'Pemetaan 3D',
            'petas' => Peta::orderBy('id_sekolah', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.peta.create', [
            'active' => 'peta',
            'call' => 'Pemetaan 3D',
            'sekolahs' => Sekolah::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetaRequest $request)
    {
        $validated = $request->validated();
        $validated['file'] = $request->file('file');
        $file = $validated['file']; // Mengambil objek file yang diunggah
        $extension = $file->getClientOriginalExtension();
        $validated['file']->move(public_path() . '/peta/', $img = 'img_' . Str::random(15) . '.' . $extension);
        $validated['file'] = 'peta/' . $img;
        Peta::create($validated);
        return redirect('/dashboard/peta')->with('success', 'Pemetaan 3D telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peta $peta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peta $peta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetaRequest $request, Peta $peta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peta $petum)
    {
        File::delete($petum['file']);
        Peta::destroy($petum->id);
        return redirect('/dashboard/peta')->with('success', 'Pemetaan 3D telah dihapus!');
    }
}

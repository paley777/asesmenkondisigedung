<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use App\Http\Requests\StorePetaRequest;
use App\Http\Requests\UpdatePetaRequest;

class PetaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetaRequest $request)
    {
        //
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
    public function destroy(Peta $peta)
    {
        //
    }
}

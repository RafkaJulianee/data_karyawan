<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use Inertia\Inertia;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatans = Jabatan::latest()->get();
        return view('jabatan.index', [
            'jabatans' => $jabatans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJabatanRequest $request)
    {
        Jabatan::create($request->validated());

        return redirect()
            ->route('jabatan.index')
            ->with('message', 'Data jabatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', [
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJabatanRequest $request, Jabatan $jabatan)
    {
        $jabatan->update($request->validated());

        return redirect()
            ->route('jabatan.index')
            ->with('message', 'Data jabatan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();

        return redirect()
            ->route('jabatan.index')
            ->with('message', 'Data jabatan berhasil dihapus');
    }
}

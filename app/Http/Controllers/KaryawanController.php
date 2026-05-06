<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use App\Models\Jabatan;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;
use Inertia\Inertia;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::with(['user', 'jabatan'])
                        ->latest()
                        ->get();

        return view('karyawan.index', [
            'karyawans' => $karyawans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $jabatans = Jabatan::all();

        return view('karyawan.create', [
            'users' => $users,
            'jabatans' => $jabatans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKaryawanRequest $request)
    {
        Karyawan::create($request->validated());

        return redirect()
            ->route('karyawan.index')
            ->with('message', 'Data karyawan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        $jabatans = Jabatan::all();
        return view('karyawan.edit', [
            'karyawan' => $karyawan,
            'jabatans' => $jabatans
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
    {
        $karyawan->update($request->validated());

        return redirect()
            ->route('karyawan.index')
            ->with('message', 'Data karyawan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()
            ->route('karyawan.index')
            ->with('message', 'Data karyawan berhasil dihapus');
    }
}

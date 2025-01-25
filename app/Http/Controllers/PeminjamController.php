<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeminjamRequest;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peminjam = Peminjam::paginate(10);
        return view('peminjam.index', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PeminjamRequest $request)
    {
        //
        Peminjam::create($request->validated());
        return redirect()->route('peminjam.index')->with('success', 'Peminjam berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjam $peminjam)
    {
        //
        return view('peminjam.edit', compact('peminjam'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PeminjamRequest $request, Peminjam $peminjam)
    {
        //
        $peminjam->update($request->validated());
        return redirect()->route('peminjam.index')->with('success', 'Peminjam berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjam $peminjam)
    {
        if ($peminjam->transaksi()->exists()) {

            return redirect()->route('peminjam.index')->with('failed', 'Peminjam ini masih memiliki transaksi dan tidak dapat dihapus.');
        }
        $peminjam->delete();
    
        return redirect()->route('peminjam.index')->with('success', 'Peminjam berhasil dihapus');
    }
    
}

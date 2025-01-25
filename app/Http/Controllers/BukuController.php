<?php

namespace App\Http\Controllers;

use App\Http\Requests\BukuRequest;
use App\Models\Buku;
use App\Models\JenisBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $buku= Buku::with('jenisbuku','transaksi')->paginate(10);
        return view('buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jenisbuku = JenisBuku::all();
        return view('buku.create',compact('jenisbuku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BukuRequest $request)
    {
        //
        Buku::create($request->validated());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
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
    public function edit(Buku $buku)
    {

        $jenisbuku = JenisBuku::all();
        return view('buku.edit', compact('buku', 'jenisbuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BukuRequest $request, Buku $buku)
    {
        //
        $buku->update($request->validated());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        if ($buku->transaksi()->exists()) {
            return redirect()->route('buku.index')->with('failed', 'Buku ini masih terhubung dengan transaksi peminjaman dan tidak dapat dihapus.');
        }
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}

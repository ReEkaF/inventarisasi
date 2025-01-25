<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisBukuStoreRequest;
use App\Models\JenisBuku;
use Illuminate\Http\Request;

class JenisBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = JenisBuku::paginate(10) 
        ->withQueryString(); 
        return view('jenis_buku.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jenis_buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JenisBukuStoreRequest $request)
    {
        dd($request);
        JenisBuku::create($request->validated());
        return redirect()->route('jenis_buku.index')->with('success', 'Jenis Buku Berhasil Ditambahkan');
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
    public function edit(JenisBuku $jenis_buku)
    {
        //
        return view('jenis_buku.edit', compact('jenis_buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisBukuStoreRequest $request, JenisBuku $jenis_buku)
    {
        $jenis_buku->update($request->validated());
        return redirect()->route('jenis_buku.index')->with('success', 'Jenis Buku Berhasil Diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisBuku $jenisBuku)
    {
        if ($jenisBuku->buku()->exists()) {
            return redirect()->route('jenis_buku.index')->with('failed', 'Jenis Buku ini masih ada tidak dapat dihapus.');
        }
    
        $jenisBuku->delete();
        
        return redirect()->route('jenis_buku.index')->with('success', 'Jenis Buku Berhasil Dihapus');
    }
    
}

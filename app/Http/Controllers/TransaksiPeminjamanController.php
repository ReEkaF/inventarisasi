<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaksiPeminjamanRequest;
use App\Models\Buku;
use App\Models\Peminjam;
use App\Models\TransaksiPeminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;
class TransaksiPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peminjaman= TransaksiPeminjaman::with('peminjam','buku')->orderby('status')->paginate(10);
        return view('transaksi_peminjaman.index', compact('peminjaman'));
    }
    public function create()
    {
        $buku = Buku::all();
        $peminjam = Peminjam::whereDoesntHave('transaksi', function ($query) {
            $query->where('status', '!=', 'return'); 
        })
        ->orWhereDoesntHave('transaksi') 
        ->get();
        return view('transaksi_peminjaman.create', compact('buku', 'peminjam'));
    }
    public function store(TransaksiPeminjamanRequest $request)
    {
        $validated = $request->validated();
    
        TransaksiPeminjaman::create([
            'peminjam_id' => $validated['peminjam_id'],
            'buku_id' => $validated['buku_id'],
            'tanggal_pinjam' => Carbon::now(), 
            'tanggal_kembali' => Carbon::now()->addDays(14), 
            'status' => 'rent', 
        ]);
        return redirect()->route('transaksi_peminjaman.index')->with('success', 'Transaksi Peminjaman berhasil ditambahkan!');
    }

    public function change($id)
    {
        $transaksipeminjaman = TransaksiPeminjaman::where('id', $id)->first();
        $transaksipeminjaman->update(['status' => 'return']);
            
        return redirect()->route('transaksi_peminjaman.index')->with('success', 'Status berhasil diubah ke Pengembalian');
    }
    public function destroy($id)
    {
        TransaksiPeminjaman::where('id', $id)->delete();
        return redirect()->route('transaksi_peminjaman.index')->with('success', 'Transaksi Peminjaman berhasil dihapus!');
    }
}

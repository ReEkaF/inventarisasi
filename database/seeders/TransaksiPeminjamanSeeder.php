<?php

namespace Database\Seeders;

use App\Models\TransaksiPeminjaman;
use App\Models\Peminjam;
use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiPeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $peminjams = Peminjam::all();
        $bukus = Buku::all();

        if ($peminjams->isEmpty() || $bukus->isEmpty()) {
            $this->command->info('Peminjam atau Buku data tidak ada.');
            return;
        }
        $statusValues = ['rent', 'return'];

        foreach (range(1, 20) as $index) {
            TransaksiPeminjaman::create([
                'peminjam_id' => $peminjams->random()->id,
                'buku_id' => $bukus->random()->id,
                'tanggal_pinjam' => Carbon::now()->subDays(rand(30, 60)),
                'tanggal_kembali' => Carbon::now()->subDays(rand(1,30 )),
                'status' => $statusValues[array_rand($statusValues)],  
            ]);
        }
        

        $this->command->info('Transaksi Peminjaman data seeded successfully!');
    }
}

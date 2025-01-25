<?php

namespace Database\Seeders;

use App\Models\JenisBuku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jenisBukuData = [
            ['id' => 1, 'nama_jenis_buku' => 'Novel'],
            ['id' => 2, 'nama_jenis_buku' => 'Komik'],
            ['id' => 3, 'nama_jenis_buku' => 'Biografi'],
            ['id' => 4, 'nama_jenis_buku' => 'Ensiklopedia'],
            ['id' => 5, 'nama_jenis_buku' => 'Jurnal'],
            ['id' => 6, 'nama_jenis_buku' => 'Majalah'],
            ['id' => 7, 'nama_jenis_buku' => 'Buku Pelajaran'],
            ['id' => 8, 'nama_jenis_buku' => 'Buku Panduan'],
            ['id' => 9, 'nama_jenis_buku' => 'Karya Ilmiah'],
            ['id' => 10, 'nama_jenis_buku' => 'Dongeng'],
        ];

        foreach ($jenisBukuData as $jenisBuku) {
            JenisBuku::create($jenisBuku);
        }
    }
}

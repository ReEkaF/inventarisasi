<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\JenisBuku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisBukuIds = JenisBuku::pluck('id')->toArray();

        // Seed the bukus table
        foreach (range(1, 10) as $index) {
            Buku::create([
                'nama_buku' => 'Buku ' . Str::random(10),  
                'jenis_buku_id' => $jenisBukuIds[array_rand($jenisBukuIds)], 
                'stok' => rand(1,10),
            ]);
        }
    }
}

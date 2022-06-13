<?php

namespace Database\Seeders;

use App\Models\jenisDocument;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jenisDocument::create([
            'jenisDoc' => 'contoh',
            'keterangan' => 'lorem ipsum'
        ]);
    }
}

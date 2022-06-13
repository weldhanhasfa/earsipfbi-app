<?php

namespace Database\Seeders;

use App\Models\distribusi;
use Illuminate\Database\Seeder;

class DistribusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        distribusi::create([
            'document_id' => 1,
            'tanggal' => '2022-06-13',
            'terbitan_id' => 1,
            'departement_id' => 1,
            'namaPenerima' => 'Weldhan',
            'copyFile' => 1,
        ]);
    }
}

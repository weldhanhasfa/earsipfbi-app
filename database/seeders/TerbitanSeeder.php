<?php

namespace Database\Seeders;

use App\Models\terbitan;
use Illuminate\Database\Seeder;

class TerbitanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        terbitan::create([
            'document_id' => 1,
            'tanggal' => '2022-16-13',
            'keterangan' => 'Lorem Ipsum'
        ]);
    }
}

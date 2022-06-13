<?php

namespace Database\Seeders;

use App\Models\document;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        document::create([
            'departement_id' => 1,
            'noDocument' => 'FBI/TI/001/BA',
            'jenis_id' => 1,
            'judulDoc' => 'SOP IT SUPPORT',
            'createBy' => 'Yuniarti'
        ]);
    }
}

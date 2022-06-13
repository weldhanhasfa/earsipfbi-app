<?php

namespace Database\Seeders;

use App\Models\departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        departement::create([
            'departement' => 'IT Support',
            'codeDepart' => 'IT'
        ]);
    }
}

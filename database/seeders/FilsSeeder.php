<?php

namespace Database\Seeders;

use App\Models\Fils;
use Illuminate\Database\Seeder;

class FilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fils::create([
            'nom' => "adam",
            'pere_id' => 1
        ]);
        Fils::create([
            'nom' => "saif",
            'pere_id' => 1
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Pere;
use Illuminate\Database\Seeder;

class PereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pere::create([
            'nom' => "ali"
        ]);
        Pere::create([
            'nom' => "salah"
        ]);
    }
}

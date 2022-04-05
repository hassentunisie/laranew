<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Log::create([
            "name" => "hassen cheffi",
        ]);
        \app\Models\Log::factory(200)->create();

    }
}

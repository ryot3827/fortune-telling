<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FateNumber;

class FateNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FateNumber::factory()->count(1)->create();
    }
}

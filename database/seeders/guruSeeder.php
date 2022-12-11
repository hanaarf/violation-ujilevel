<?php

namespace Database\Seeders;

use App\Models\guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        guru::factory()->count(40)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\murid;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class muridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        murid::truncate();
        Schema::enableForeignKeyConstraints();

        murid::factory()->count(100)->create();
    }
}

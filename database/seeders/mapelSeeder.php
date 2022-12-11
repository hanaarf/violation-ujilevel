<?php

namespace Database\Seeders;

use App\Models\mapel;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'pai'],
            ['name'=>'pkn'],
            ['name'=>'mtk'],
            ['name'=>'bahasa indonesia'],
            ['name'=>'bahasa sunda'],
            ['name'=>'bahasa inggris'],
            ['name'=>'seni budaya'],
            ['name'=>'sindo'],
            ['name'=>'informatika'],
            ['name'=>'bk'],
            ['name'=>'pjok'],
            ['name'=>'kejuruan'],
        ];

        foreach ($data as $item ) {
            mapel::insert([
                'name' => $item['name'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }
    }
}

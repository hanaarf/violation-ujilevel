<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'X PPLG I','guru_id'=>'1'],
            ['name'=>'X PPLG II','guru_id'=>'2'],
            ['name'=>'X PPLG III','guru_id'=>'3'],
            ['name'=>'X MM I','guru_id'=>'4'],
            ['name'=>'X MM II','guru_id'=>'5'],
            ['name'=>'X MM III','guru_id'=>'6'],
            ['name'=>'X MM IV','guru_id'=>'7'],
            ['name'=>'X TKJ I','guru_id'=>'8'],
            ['name'=>'X TKJ II','guru_id'=>'9'],
            ['name'=>'X TE','guru_id'=>'10'],
            ['name'=>'X BRC','guru_id'=>'11'],

            
            ['name'=>'XI PPLG I','guru_id'=>'12'],
            ['name'=>'XI PPLG II','guru_id'=>'13'],
            ['name'=>'XI MM I','guru_id'=>'14'],
            ['name'=>'XI MM II','guru_id'=>'15'],
            ['name'=>'XI MM III','guru_id'=>'16'],
            ['name'=>'XI MM IV','guru_id'=>'17'],
            ['name'=>'XI TKJ I','guru_id'=>'18'],
            ['name'=>'XI TKJ II','guru_id'=>'19'],
            ['name'=>'XI TKJ III','guru_id'=>'20'],
            ['name'=>'XI TE','guru_id'=>'21'],
            ['name'=>'XI BRC','guru_id'=>'22'],


            ['name'=>'XII PPLG I','guru_id'=>'23'],
            ['name'=>'XII PPLG II','guru_id'=>'24'],
            ['name'=>'XII MM I','guru_id'=>'25'],
            ['name'=>'XII MM II','guru_id'=>'26'],
            ['name'=>'XII TKJ I','guru_id'=>'27'],
            ['name'=>'XII TKJ II','guru_id'=>'28'],
            ['name'=>'XII TKJ III','guru_id'=>'29'],
            ['name'=>'XII TE I','guru_id'=>'30'],
            ['name'=>'XII TE II','guru_id'=>'31'],
            ['name'=>'XII BRC','guru_id'=>'32']

        ];

        foreach ($data as $item ) {
            kelas::insert([
                'name' => $item['name'],
                'guru_id' => $item['guru_id'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }


    }
}

<?php

namespace Database\Seeders;

use App\Models\pelanggaran;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'siswa/siswi terlambat masuk sekolah', 'point'=>5, 'sanksi'=>'pengecekan tas dan mendapat teguran guru'],
            ['name'=>'3 hari tidak sekolah tanpa keterangan', 'point'=>25, 'sanksi'=>'siswa diminta keterangan dn surat perjanjian'],
            ['name'=>'siswa meninggalkan kbm tanpa seizin guru', 'point'=>10, 'sanksi'=>'pengecekan tas dan mendapat teguran guru'],
            ['name'=>'tidak mengikuti ekstrakurikuler yg dipilih', 'point'=>10, 'sanksi'=>'siswa membuat surat perjanjian'],
            ['name'=>'siswa tidak mengikuti upacara', 'point'=>10, 'sanksi'=>'siswa diminta membersihkan lingkungaan skolah'],

            ['name'=>'siswa laki memakai celana ketat', 'point'=>15, 'sanksi'=>'siswa ditindak dgn melepas jahitan'],
            ['name'=>'memakai seragam tidak sesuai', 'point'=>15, 'sanksi'=>'siswa dipulangkan utk mengganti sragam'],
            ['name'=>'memakai atribut yg tdk ditentukan', 'point'=>10, 'sanksi'=>'atribut akan disita'],
            ['name'=>'memakai seragam tidak rapi', 'point'=>10, 'sanksi'=>'siswa mendapat teguran'],
            ['name'=>'memakai pakaian diatas matakaki 10cm', 'point'=>10, 'sanksi'=>'siswa diminta tdk memakai pakaian tsb'],

            ['name'=>'merusak sarana prasarana', 'point'=>50, 'sanksi'=>'siswa mengembalikan sarana prasarana skolah'],
            ['name'=>'membuat kegaduhan didlm dn luar skolah', 'point'=>10, 'sanksi'=>'siswa diberi peringatan'],
            ['name'=>'melompat pagar sekolah utk kluar masuk', 'point'=>20, 'sanksi'=>'siswa diberi peringatan'],
            ['name'=>'tidak melaksanakan piket', 'point'=>10, 'sanksi'=>'siswa diberi teguran'],
            ['name'=>'membuang permen karet bekas sembarangan', 'point'=>15, 'sanksi'=>'siswa wajib membersihkan bekas permen karet'],
            ['name'=>'mengajak teman luar masuk ke area sekolah', 'point'=>25, 'sanksi'=>'siswa diminta keterangan'],
            ['name'=>'meludah sembarangan di area sekolah', 'point'=>10, 'sanksi'=>'siswa diberi sanksi kebersihan'],
            ['name'=>'siswa membawa senjata tajam/api', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],
            ['name'=>'siswa berkata tidak sopan', 'point'=>10, 'sanksi'=>'siswa diberi pembinaan'],
            ['name'=>'siswa mencuri', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],
            ['name'=>'siswa membunuh', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],


            ['name'=>'bersolek berlebihan', 'point'=>5, 'sanksi'=>'alat makeup disita pihak sekolah'],
            ['name'=>'nikah/menghamili selama menjadi siswa', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],
            ['name'=>'mabuk di sekolah', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],
            ['name'=>'siswa merokok', 'point'=>50, 'sanksi'=>'siswa diberi sp1'],
            ['name'=>'memakai perhiasan berlebihan', 'point'=>5, 'sanksi'=>'siswa diberi pengarahan'],
            ['name'=>'rambut siswa gondrong dn mohak', 'point'=>15, 'sanksi'=>'pihak sekolah mencukur rambut'],
            ['name'=>'siswa ditindik/tatto permanen', 'point'=>100, 'sanksi'=>'dikembalikan ke orangtua'],
            ['name'=>'memelihara kuku panjang', 'point'=>5, 'sanksi'=>'siswa diminta memotong kuku saat itu juga'],
            ['name'=>'rambut siswa di cat bkn hitam', 'point'=>15, 'sanksi'=>'warna rambut diminta dikembalikan sperti aslinya'],



            ['name'=>'berkelahi/tawuran dengan sekolah lain', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],
            ['name'=>'berkelahi antar siswa', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua'],
            ['name'=>'menjadi provokator perkelahian', 'point'=>100, 'sanksi'=>'siswa dikembalikan ke orangtua']
        ];
        foreach ($data as $item ) {
            pelanggaran::insert([
                'name' => $item['name'],
                'point' => $item['point'],
                'sanksi' => $item['sanksi'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);                                      
        }
        
    }
}

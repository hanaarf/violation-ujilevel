<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class guru extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'guru';

    protected $fillable = [
        'name','mapel_id','nik','alamat','email','pw','telp','tgl_lahir','gender'
    ];

    public function mapel(){
        return $this->belongsTo(mapel::class, 'mapel_id', 'id');
    }

    public function kelas(){
        return $this->hasMany(kelas::class, 'guru_id', 'id');
    }


}

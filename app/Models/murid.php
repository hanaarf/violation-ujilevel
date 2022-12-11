<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class murid extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'murid';

    protected $fillable = [
        'name','kelas_id','nisn','alamat','email','pw','telp','tgl_lahir','gender','point'
    ];

    
    public function kelas(){
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }

    public function violation(){
        return $this->hasMany(violation::class, 'murid_id', 'id');
    }
    
}

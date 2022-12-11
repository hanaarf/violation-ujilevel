<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class violation extends Model
{
    use HasFactory;
    protected $table = 'violation';

    protected $fillable = [
        'murid_id','pelanggaran_id'
    ];

    public function murid(){
        return $this->belongsTo(murid::class, 'murid_id', 'id');
    }

    public function pelanggaran(){
        return $this->belongsTo(pelanggaran::class, 'pelanggaran_id', 'id');
    }

    public function guru(){
        return $this->belongsTo(guru::class, 'guru_id', 'id');
    }
}

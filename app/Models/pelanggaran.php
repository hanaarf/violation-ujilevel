<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'pelanggaran';

    protected $fillable = [
        'name','point','sanksi'
    ];

    public function violation(){
        return $this->hasMany(violation::class, 'pelanggaran_id', 'id');
    }
}

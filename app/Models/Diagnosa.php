<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function laboratory()
    {
        return $this->hasMany(Laboratory::class);
    }

    public function jenis_tes()
    {
        return $this->belongsTo(Jenis_Tes::class, 'id_jenis');
    }
    
}

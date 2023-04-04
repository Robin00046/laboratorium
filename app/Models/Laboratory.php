<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pasien;
use App\Models\Diagnosa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laboratory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

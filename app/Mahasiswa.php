<?php

namespace App;
use App\Kelas;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $guarded = [];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}

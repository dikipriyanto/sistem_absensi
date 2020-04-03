<?php

namespace App;
use App\Mahasiswa;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $guarded = [];

    public function mahasiswas(){
        return $this->hasMany(Mahasiswa::class);
    }
}

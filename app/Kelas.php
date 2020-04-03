<?php

namespace App;
use App\Mahasiswa;
use Kyslik\ColumnSortable\Sortable;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use Sortable;

    public $sortable = ['id', 'nama_kelas'];
    
    protected $guarded = [];

    public function mahasiswas(){
        return $this->hasMany(Mahasiswa::class);
    }
}

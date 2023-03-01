<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'alamat',
        'no_telpn', 
        'kelas_id',
        'spps_id',   
    ];

    public function kelas()
    {
        return $this ->belongsTo('App\models\kelas','id','kelas_id');
    }
    public function pembayaran()
    {
        return $this->hasMany('App\Models\pembayarans');
    }
}


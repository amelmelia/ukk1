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
        'spps_id'
    ];
    public function Kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas_id', 'id');
    }
    public function spp()
    {
        return $this->belongsTo('App\Models\Spp', 'spps_id', 'id');
    }
    public function pembayaran()
{
    return $this ->hasMany('App\Models\Pembayaran');
}

}


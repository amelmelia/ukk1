<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $fillable = [
        'user_id',
        'siswa_id',
        'spps_id',
        'tgl_bayar',
        'bulan_bayar',
        'tahun_dibayar',
        'jumlah_bayar'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'kelas_id');
    
    }
    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa', 'id', 'siswa_id');

    }
    public function spp()
    {
    return $this->belongsTo('App\Models\Kelas', 'id', 'kelas_id');
    
    }
}
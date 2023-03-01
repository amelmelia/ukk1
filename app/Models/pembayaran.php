<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
   protected $table = 'pembayarans';
   protected $fillable = [
    'users_id',
    'siswas_id',
    'spps_id',
    'tgl_pembayaran',
    'bulan_bayar',
    'tahun_bayar',
    'jumlah_bayar',
   ];
   public function user()
   {
    return $this->belongTo('App\Models\users','id','user_id');
   }
   public function siswa()
   {
    return $this->belongsTo('App\Models\siswa','id','siswas_id');
   }
   public function spp()
   {
    return $this ->belongsTo('App\models\kelas','id','spps_id');
   }
}



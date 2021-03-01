<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Kk_baru extends Model
{
	protected $table = 'kk_baru',
    			$fillable = [
                    'nama',
                    'no_kk',
                    'nik',
                    'alamat',
                    'no_rt',
                    'no_hp',
                    'alasan',
                    'jumlah',
                    'daftar_anggota_nik',
                    'daftar_nama_anggota',
                    
                    
                ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }  

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}

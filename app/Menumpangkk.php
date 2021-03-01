<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menumpangkk extends Model
{

	protected $table = 'menumpang_kartukeluarga',
    			$fillable = [
                    'nama_kk_lama',
                    'no_kk_lama',
                    'nik_kk_lama',
                    'nama_kk_ditempati',
                    'no_kk_ditempati',
                    'nik_kk_ditempati',
                    'alamat_kk_ditempati',
                    'no_rt',
                    'kelurahan',
                    
                    'kota',
                    'kecamatan',
                    'provinsi',
                    'no_hp',
                    'alasan_menumpang',
                    'jumlah_anggota_menumpang',
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

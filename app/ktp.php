<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
	protected $table = 'ktp',
    			$fillable = [
                    'nama','no_kk','nik_kk','alamat','no_rt','kode_pos','no_hp'
                    
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
	protected $table = 'usaha',
    			$fillable = ['user_id','nama','kelamin','kewarganegaraan','tggl_lhr','agama','pekerjaan','perkawinan','alamat','nik','nama_usaha','mulai_usaha','jenis_usaha','alamat_usaha','luas_usaha','panjang','lebar'];
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

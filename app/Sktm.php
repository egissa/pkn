<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sktm extends Model
{
    protected $table = 'sktm',
    			$fillable = ['user_id','jabatan_id','nama','kelamin','kewarganegaraan','perkawinan','tggl_lhr','agama','pekerjaan','alamat','nik','no_bdt','nama_anak','nis','sekolah','almt_sekolah','status'];

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

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

}

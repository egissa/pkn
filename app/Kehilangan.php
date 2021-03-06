<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehilangan extends Model
{
    protected $table = 'kehilangan',
    			$fillable = ['user_id','jabatan_id','nama','kelamin','tggl_lhr','agama','pekerjaan','alamat','nik','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}

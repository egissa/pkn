<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = 'kematian',
    			$fillable = ['user_id','nama','kelamin','tggl_lhr','agama','pekerjaan','alamat','nik','keterangan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }
}

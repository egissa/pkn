<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skck extends Model
{
    protected $table = 'skck',
    			$fillable = ['user_id','nama','kelamin','kewarganegaraan','tggl_lhr','agama','pekerjaan','perkawinan','alamat','nik','keterangan'];

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

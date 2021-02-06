<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = [
    	'user_id','no_kk','nik_kk','nama_kk','nik','nama','tggl_lhr','nik_ibu','nik_ayah','kelamin','umur','pendidikan','hub_kel','gol_darah','perkawinan','agama','alamat','kode_pos','pekerjaan','kecamatan','cacat','kelurahan','no_rt'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function skck()
    {
        return $this->belongsTo(Skck::class);
    }
}

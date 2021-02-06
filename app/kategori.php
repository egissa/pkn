<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
	protected $table = 'kategori';
    			
            $fillable = [
                   'permohonan','users_id'
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

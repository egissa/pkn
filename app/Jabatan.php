<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $fillable = ['nip','nama','jabatan','jabatan2'];


	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sktm()
    {
    	return $this->hasMany(Sktm::class);
    }
}

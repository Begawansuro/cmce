<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
     protected $table = 'Perusahaan';
    protected $fillable = ['id', 'npwp', 'nama', 'adr'];
	
	 public function karyawan()
    {
    	return $this->belongsTo(Karyawan::class);
    }

}

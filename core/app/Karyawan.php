<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['id', 'pt_id', 'nik', 'nama_k','gender','pendidikan','tmp_lahir','tgl_lahir','adr_k','photo'];
	
	 public function perusahaan()
    {
    	return $this->belongsTo(Perusahaan::class);
    }
}

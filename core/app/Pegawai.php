<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
	 protected $table = 'mc_karyawan';
    protected $fillable = ['id','idpt','nik', 'namakaryawan', 
							'gender','tempat_lahir','tgl_lahir','paket','dept_code', 
							'dept_desc','line_code','line_desc','jabatan_code', 
							'jabatan_desc','photo','updated_at','created_at'];
	
	 public function perusahaan()
    {
    	return $this->belongsTo(Perusahaan::class);
    }
}

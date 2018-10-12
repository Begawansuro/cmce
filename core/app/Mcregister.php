<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mcregister extends Model
{
    //
	protected $table = 'mcregistrasi';
	protected $fillable = ['id','idtrf','idkaryawan','tglperiksa', 'dok_id', 
							'pakett','updated_at','created_at'];
}

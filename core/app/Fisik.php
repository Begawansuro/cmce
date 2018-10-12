<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisik extends Model
{
    protected $table = 'mc_fisik';
	protected $fillable = ['id', 
							'idregister', 
							'tinggibadan', 
							'beratbadan', 
							'bmi', 
							'kategoribmi', 
							'nadi', 
							'respirasi', 
							'suhutubuh', 
							'tekanandarah', 
							'kat_jnvsistotika', 
							'kat_jnvdiastotika', 
							'visuskanan', 
							'visuskiri', 
							'rek_kacamata', 
							'kapala', 
							'mata', 
							'telinga', 
							'hidung', 
							'tenggorokan', 
							'leher', 
							'gigi', 
							'mulut', 
							'dada', 
							'abdomen', 
							'Ektremitas', 
							'Anogenital', 
							'flag', 
							'updated_at', 
							'created_at'];
}

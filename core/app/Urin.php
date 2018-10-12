<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urin extends Model
{
    protected $table = 'mc_urin';
	protected $fillable = [
							'id', 
							'idregister', 
							'kejernian', 
							'berat', 
							'ph', 
							'protein', 
							'glukosa', 
							'keton', 
							'bilirubin', 
							'uro', 
							'leo', 
							'haem', 
							'nitrit', 
							'leco', 
							'eri_urin', 
							'leo_urin', 
							'epitel', 
							'silinder', 
							'kristal', 
							'lain', 
							'kosistensi', 
							'warna', 
							'darah', 
							'lendir', 
							'eri_fae', 
							'leu_fae', 
							'amoeba', 
							'kista', 
							'lain_fae', 
							'thorax', 
							'ecg', 
							'fisikdokter', 
							'updated_at', 
							'created_at'];
}

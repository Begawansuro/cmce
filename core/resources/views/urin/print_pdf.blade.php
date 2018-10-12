<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
	@page {
   size: 21cm 29.7cm;
   margin-top: 1cm;
   margin-bottom: 1cm;
   border: 1px solid blue;
    background-image: url("/images/otot.gif");
}

		    table {
    border-spacing: 0;
    width: 100%;
	font-size: 10px;
    }
    th {
    background: #404853;
    background: linear-gradient(#687587, #404853);
    border-left: 1px solid rgba(0, 0, 0, 0.2);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 3px;
	font-size: 10px;
    text-align: left;
    text-transform: uppercase;
    }
	.F18 {
		font-size: 12px;
		font-weight: bold;	
		}
	.b-left{
		   border-left: 1px solid #000000;
	}
	.b-right{
		   border-right: 1px solid #000000;
	}
	.b-top{
		   border-top: 1px solid #000000;
	}
	.b-bottom{
		   border-bottom: 1px solid #000000;
	}		
	</style>
@foreach($datas as $data)		
  <link rel="stylesheet" href="">
	<title>Print Ceta Data Fisik</title>
</head>
<body>
<table id="pseudo-demo">
 <thead>
<tr>
  <td>&nbsp;</td>
  <td>Logo</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>apa aja </td>
  <td>&nbsp;</td>
</tr>
<tr>
                          <td>&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="11%">:</td>
                          <td width="4%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="18%">&nbsp;</td>
                        </tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
			</thead>
</table>
<table id="pseudo-demo">
 <thead>
<tr>
  <td width="2%">&nbsp;</td>
  <td>Nama</td>
  <td colspan="4">: {{$data->namakaryawan}} </td>
  <td width="39%" colspan="3" rowspan="7">@if($data->photo)
						  <img src="{{$data->photo}}" alt="Photo" width="180" height="150">
							 @else
						  <img src="{{asset('public/images/default.png')}}" alt="Photo" width="180" height="170">
						  @endif
						 {!! DNS1D::getBarcodeHTML($data->idtrf, "C128")!!}
						   <?php //echo DNS1D::getBarcodeHTML("{{$data->idtrf}}", "C128")?> 
						  </td>
  </tr>
<tr>
                          <td>&nbsp;</td>
                          <td width="18%">Jenis Kelamin </td>
                          <td colspan="4">: {{$data->gender}}</td>
                        </tr>
<tr>
  <td>&nbsp;</td>
  <td>Tanggal Lahir </td>
  <td colspan="4">:{{$data->tempat_lahir}} / {{$data->tgl_lahir}}</td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td>Nik</td>
  <td colspan="4">:{{$data->nik}}</td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td>Departement</td>
  <td colspan="4">:{{$data->dept_desc}} / {{$data->line_desc}} </td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td>Tanggal Periksa </td>
  <td colspan="4">:Tgl {{$data->tglperiksa}} </td>
  </tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td width="11%">&nbsp;</td>
  <td width="4%">&nbsp;</td>
  <td width="13%">&nbsp;</td>
  <td width="13%">&nbsp;</td>
  </tr>
			</thead>
</table>

<table id="pseudo-demo">
     <thead>
                        <tr>
                          <th colspan="9"><div align="center">ANAMNESIS, TANDA VITAL, ANTROVISUS, DAN PEMERIKSAAN FISIK </div></th>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td colspan="8" rowspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="2%">&nbsp;</td>
                          <th colspan="8">ANTROPOMETRI</th>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td width="13%">Tinggi Badan </td>
                          <td width="11%">:{{$data->tinggibadan}}</td>
                          <td width="4%">Cm</td>
                          <td width="13%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="13%">&nbsp;</td>
                          <td width="18%">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Berat Badan </td>
                          <td>:{{$data->beratbadan}}</td>
                          <td>Kg</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>BMI</td>
                          <td>:{{$data->bmi}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Kategori BMI </td>
                          <td>:{{$data->kategoribmi}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <th colspan="8">TANDA VITAL </th>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Nadi</td>
                          <td>:{{$data->nadi}}</td>
                          <td>x/Menit</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Respirasi</td>
                          <td>:{{$data->respirasi}}</td>
                          <td>x/Menit</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Suhu Tubuh </td>
                          <td> {{$data->suhutubuh}}</td>
                          <td colspan="3">Derajat Celcius </td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Tekanan Darah </td>
                          <td>:{{$data->tekanandarah}}</td>
                          <td>mm/Hg</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Kategori JNV VII (Sistotik) </td>
                          <td>:{{$data->kat_jnvsistotika}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Kategori JNV VII (Diastotik) </td>
                          <td>:{{$data->kat_jnvdiastotika}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <th colspan="8">VISUS DAN REFRAKSI </th>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Visus Kanan </td>
                          <td>:{{$data->visuskanan}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Visus Kiri </td>
                          <td>:{{$data->visuskiri}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Rekomendasi Kacamata </td>
                          <td colspan="3" rowspan="2">:{{$data->rek_kacamata}}</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <th colspan="8">PEMERIKSAAN FISIK </th>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Kepala</td>
                          <td colspan="3">:{{$data->kapala}}</td>
                          <td>Gigi</td>
                          <td colspan="3">: {{$data->gigi}} </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Mata</td>
                          <td colspan="3">:{{$data->mata}}</td>
                          <td>Mulut</td>
                          <td colspan="3">: {{$data->mulut}} </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Telinga</td>
                          <td colspan="3">:{{$data->telinga}}</td>
                          <td>Dada</td>
                          <td colspan="3">: {{$data->dada}} </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Hidung</td>
                          <td colspan="3">:{{$data->hidung}}</td>
                          <td>Abdomen</td>
                          <td colspan="3">: {{$data->abdomen}} </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Tenggorokan</td>
                          <td colspan="3">:{{$data->tenggorokan}}</td>
                          <td>Ekstremitas</td>
                          <td colspan="3">:{{$data->Ektremitas}}</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Leher</td>
                          <td colspan="3">:{{$data->leher}}</td>
                          <td>Anogenital</td>
                          <td colspan="3">:{{$data->Anogenital}}</td>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
@endforeach
</body>
</html>
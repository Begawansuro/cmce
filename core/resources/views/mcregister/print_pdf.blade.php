<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
	@page {
   size: 21cm 29.7cm;
   margin-top: 0cm;
   margin-bottom: 0cm;
   border: 1px solid blue;
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
	<title>Laporan Data Transaksi</title>
</head>
<body>
<table id="pseudo-demo">
     <thead>
                        <tr>
                          <td><div align="right"><img src="{{asset('public/inc/images/nnr2.png')}}" alt="Logo"></div></td>
                          <td ><div align="left" class="F18">
						   	PT. NAUFAL NABILA RAZKA</div>
							In House Clinic, Medical Check Up, Konsultasi K3.Legal 
							Konsultasi, Healt Promotion,dll<br/>
							RUKO DUTA INDAH SENTOSA, Blok B No 42
							Jl Raya Moh. Toha Kec Priuk Kota Tangerang<br/>
							Email: pt.naufalnabilarazka@yahoo.com<br/>
							Telp:021 59712061 / 0813 1772 5471<br/>
							</td>
                          <td><div align="right"></div></td>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
 <table id="pseudo-demo">
     <thead>
                        <tr>
                          <th colspan="6"> <div align="center">Di ISI OLEH PESERTA MEDICAL CHECK UP </div></th>
                        </tr>
						<tr>
						  <td width="5%">&nbsp;</td>
						  <td width="26%">Nip</td>
						  <td width="30%">:{{$data->nik}}</td>
						  <td width="13%"></td>
						  <td colspan="2" rowspan="9">
						  <b class="F18"><center>
						  Paket : {{$data->pakett}} </center></b>
						  <center>
						  @if($data->photo)
						  <img src="{{$data->photo}}" alt="Photo" width="180" height="150">
							 @else
						  <img src="{{asset('public/images/default.png')}}" alt="Photo" width="180" height="170">
						  @endif
						  </center>
						  <?php echo DNS1D::getBarcodeHTML("{{$data->idtrf}}", "C128")?> 
						  </td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Nama</td>
						  <td>:{{$data->namakaryawan}} </td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Tanggal Lahir </td>
						  <td>:{{$data->tgl_lahir}}</td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Jenis Kelamin </td>
						  <td><label>
						        <input type="checkbox" name="checkbox" value="checkbox">
						        Laki -Laki</label>
								<label>
						        <input type="checkbox" name="checkbox" value="checkbox">
						        Perempuan</label>					      </td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Alamat Rumah </td>
						  <td>:{{$data->alamat}}</td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td></td>
						  <td></td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Telp / HP </td>
						  <td>:{{$data->tlp}}</td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Dept / Bagian </td>
						  <td>:{{$data->dept_desc}} / {{$data->line_desc}}</td>
						  <td></td>
	   </tr>
						<tr>
						<td>&nbsp;</td>
						<td>Tanggal Pemeriksaan </td>
						<td>:{{$data->tglperiksa}}</td>
						<td></td>
						</tr>
   </thead>
                      <tbody>
                      </tbody>
</table>

<table id="pseudo-demo">
     <thead>
                        <tr>
                          <th colspan="13"> <div align="center">DI ISI OLEH PARAMEDIS MEDICAL CHECK UP </div></th>
                        </tr>
						<tr>
						  <td width="2%">&nbsp;</td>
						  <td colspan="3"><div align="center">Antropometri</div></td>
						  <td colspan="3"><div align="center">Tanda Vital </div></td>
						  <td colspan="3"><div align="center">Visus</div></td>
	                      <td colspan="3">Buta Warna </td>
       </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td width="10%">Berat Badan </td>
						  <td width="14%">:</td>
						  <td width="7%">Kg</td>
						  <td width="11%">Tekanan Darah </td>
						  <td width="11%">:</td>
	                      <td width="8%">/ MM Hg </td>
	                      <td width="9%">Mata Kanan </td>
	                      <td width="9%" colspan="2"></td>
	                      <td width="19%" colspan="3"><label>
                          <input type="checkbox" name="checkbox2" value="checkbox">
                          Total</label></td>
       </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>Tinggi Badan </td>
						  <td>:</td>
						  <td>Kg</td>
						  <td>Nadi</td>
						  <td>:</td>
	                      <td>x / Menit </td>
	                      <td>Mata Kiri </td>
	                      <td colspan="2"></td>
	                      <td colspan="3"><input type="checkbox" name="checkbox22" value="checkbox">
	                        Parsial.....</td>
       </tr>
   </thead>
                      <tbody>
                      </tbody>
</table>
<table id="pseudo-demo">
     <thead>
                        <tr>
                          <th colspan="6"> <div align="center">DI ISI OLEH DOKTER MEDICAL CHECK UP </div></th>
                        </tr>
						<tr>
						  <td width="5%">&nbsp;</td>
						  <td colspan="5"><strong>Kepala</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td width="16%"><input type="checkbox" name="checkbox23" value="checkbox">
					      Alopecia</td>
						  <td width="17%"><label>
						    <input type="checkbox" name="checkbox24" value="checkbox">
					      Mikrocefali</label></td>
						  <td width="19%"><input type="checkbox" name="checkbox25" value="checkbox">
					      Mikrocefali</td>
						  <td width="19%"><input type="checkbox" name="checkbox26" value="checkbox">
					      Sinussitas</td>
						  <td width="24%">............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Mata</strong>:</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Conjunctiva anemis </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Sclera Ikterik
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Pterigium</td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Hordoculum</td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Telinga</strong>:</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Serumen+</td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Seret Telinga + 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Tinitus</td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Atresia</td>
						  <td>............</td>
	   </tr>
						<tr>
						<td>&nbsp;</td>
						<td colspan="5"><strong>Hidung</strong>:</td>
						</tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Polio Nasal </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Sekret Hidung + 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Tinitus</td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Atresia</td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Tenggorok</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Faring Hiperimis </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Tonsil Hiperimis 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						  T2-T2</td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    T3-T3</td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Leher</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Thyroid Membesar </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Pembesaran KGB 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Scrofuloderma</td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    JVP &gt;&gt;&gt;</td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Gigi</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Caries /Pulpitus</td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Calculus
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Ganggren Pulpa </td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Gangren Radix </td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Mulut</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Stomatitis</td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Gingivitas
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Candidiasis</td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Lidah Kotor </td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Dada</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Wheezing</td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Ronkhi + 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Jantung Membesar </td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Murmur Pada Katup </td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Abdomen</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    NT Kanan Bawah </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            NK CVA 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    NT Epigastrium </td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Liver Besar </td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Hernia Inguinalis </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Ascites
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Hernia Umbilicalis </td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Limpa Besar </td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Ektrimitas</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Osteoarthritis</td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Gout Arthritis 
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    LBP + </td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Post Fracture </td>
						  <td>............</td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5"><strong>Anogenital</strong></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="checkbox" name="checkbox23" value="checkbox">
						    Hernia Scrotalis </td>
						  <td><label>
                            <input type="checkbox" name="checkbox24" value="checkbox">
                            Hemorrhold
						  </label></td>
						  <td><input type="checkbox" name="checkbox25" value="checkbox">
						    Flour Albus </td>
						  <td><input type="checkbox" name="checkbox26" value="checkbox">
						    Sekret Kelamin + </td>
						  <td>............</td>
	   </tr>
   </thead>
                      <tbody>
                      </tbody>
</table>
 <table id="pseudo-demo">
     <thead>
	 <tr><td colspan="12">&nbsp;</td></tr>
	 
						<tr>
						  <td width="2%" class="b-right">&nbsp;</td>
						  <td width="21%" rowspan="2" class="b-right b-top">&nbsp;</td>
						  <td width="2%" >&nbsp;</td>
						  <td width="21%" rowspan="2" class="b-top b-right b-left">&nbsp;</td>
						  <td width="2%" ></td>
						  <td width="21%" rowspan="2"class="b-top b-right b-left" >&nbsp;</td>
						  <td width="2%" rowspan="7"></td>
						  <td width="24%" rowspan="2" class="b-top b-right b-left"></td>
						  <td width="5%" rowspan="12"></td>
	   </tr>
						<tr>
						  <td class="b-right">&nbsp;</td>
	                      <td width="2%" >&nbsp;</td>
	                      <td width="2%" ></td>
	   </tr>
						<tr>
						  <td class="b-right">&nbsp;</td>
						  <td class="b-bottom b-right"><div align="right">Pemeriksa Darah </div></td>
						  <td width="2%" >&nbsp;</td>
						  <td class="b-right b-bottom b-left"><div align="right" >Pemeriksa Urin </div></td>
						  <td width="2%" ></td>
						  <td class="b-bottom b-right b-left"><div align="right">Pemeriksa Rontgent </div></td>
						  <td class="b-bottom b-right b-left"><div align="right">Pemeriksa Audiometri </div></td>
	   </tr>
						<tr>
						  <td >&nbsp;</td>
						  <td>&nbsp;</td>
						  <td width="2%" >&nbsp;</td>
						  <td>&nbsp;</td>
						  <td width="2%" ></td>
						  <td></td>
						  <td></td>
	   </tr>
						<tr>
						  <td class="b-right">&nbsp;</td>
						  <td rowspan="2" class="b-top b-right">&nbsp;</td>
						  <td width="2%" class="b-right">&nbsp;</td>
						  <td rowspan="2" class="b-top b-right">&nbsp;</td>
						  <td width="2%" >&nbsp;</td>
						  <td rowspan="2" class="b-right b-top b-left">&nbsp;</td>
						  <td rowspan="2" class="b-right b-left b-top">&nbsp;</td>
	   </tr>
						<tr>
						  <td class="b-right">&nbsp;</td>
	                      <td width="2%" class="b-right">&nbsp;</td>
	                      <td width="2%" ></td>
	   </tr>
						<tr>
						<td class="b-right">&nbsp;</td>
						<td class="b-bottom b-right"><div align="right" >Pemeriksa Spirometri </div></td>
						<td width="2%" class="b-right">&nbsp;</td>
						<td class="b-right b-bottom"><div align="right">EKG</div></td>
						<td width="2%" ></td>
						<td class="b-right b-left b-bottom">&nbsp;</td>
						<td class="b-right b-left b-bottom">&nbsp;</td>
						</tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td><div align="center">Dokter Pemeriksa </div></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td rowspan="2"></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5">*Setelah pemeriksaan selesai mohon formulir medical </td>
						  <td></td>
	   </tr>
						<tr>
						  <td>&nbsp;</td>
						  <td colspan="5">chek up dikembalikan ke bagian pendaftaran, terima kasih. </td>
						  <td></td>
						  <td><div align="center">(..........................................................)</div></td>
	   </tr>
   </thead>
                      <tbody>
                      </tbody>
</table>
@endforeach
</body>
</html>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fisik;
use App\Karyawan;
use App\Perusahaan;
use App\Mcregister;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use PDF;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;

class FisikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = DB::table('mcregistrasi as A')
				->join('mc_karyawan as B', 'A.idkaryawan', '=', 'B.nik')
				->join('perusahaan as C','B.idpt','=','C.id')
				->leftjoin('mc_fisik as D','D.idregister','=','A.idtrf')
				->select('A.idtrf','D.id as idfisik','D.flag','B.nik','B.namakaryawan','B.gender','B.tempat_lahir','B.tgl_lahir','B.dept_desc','B.line_desc','B.Jabatan_desc','B.alamat','B.photo','C.nama')
				->get();
        return view('fisik.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fisik.create');
    }

    /**
     * update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $count = Fisik::where('idregister',$request->input('regis'))->count();

        if($count>0){
		    $Fisik = Fisik::find($request->get('idfisik'));
			$Fisik->update([
					'tinggibadan' => $request->get('an1'),
					'beratbadan' => $request->get('an2'),
					'bmi' => $request->get('an3'),
					'kategoribmi' => $request->get('an4'),
					'nadi' => $request->get('tan1'),
					'respirasi' => $request->get('tan2'),
					'suhutubuh' => $request->get('tan3'),
					'tekanandarah' => $request->get('tan4'),
					'kat_jnvsistotika' => $request->get('tan5'),
					'kat_jnvdiastotika' => $request->get('tan5'),
					'visuskanan' => $request->get('vis1'),
					'visuskiri' => $request->get('vis2'),
					'rek_kacamata' => $request->get('vis3'),
					'kapala' => $request->get('fis1'),
					'mata' => $request->get('fis2'),
					'telinga' => $request->get('fis3'),
					'hidung' => $request->get('fis4'),
					'tenggorokan' => $request->get('fis5'),
					'leher' => $request->get('fis6'),
					'gigi' => $request->get('fis7'),
					'mulut' => $request->get('fis8'),
					'dada' => $request->get('fis9'),
					'abdomen' => $request->get('fis10'),
					'Ektremitas' => $request->get('fis11'),
					'Anogenital' => $request->get('fis12'),
					'flag' => '1',
                ]);
			alert()->success('Berhasil.','Data telah disimpan!');
			return redirect()->route('fisik.index');
        }

        $this->validate($request, [
            'regis' => 'required',
        ]);

        Fisik::create([
					'idregister' => $request->get('regis'),
					'tinggibadan' => $request->get('an1'),
					'beratbadan' => $request->get('an2'),
					'bmi' => $request->get('an3'),
					'kategoribmi' => $request->get('an4'),
					'nadi' => $request->get('tan1'),
					'respirasi' => $request->get('tan2'),
					'suhutubuh' => $request->get('tan3'),
					'tekanandarah' => $request->get('tan4'),
					'kat_jnvsistotika' => $request->get('tan5'),
					'kat_jnvdiastotika' => $request->get('tan5'),
					'visuskanan' => $request->get('vis1'),
					'visuskiri' => $request->get('vis2'),
					'rek_kacamata' => $request->get('vis3'),
					'kapala' => $request->get('fis1'),
					'mata' => $request->get('fis2'),
					'telinga' => $request->get('fis3'),
					'hidung' => $request->get('fis4'),
					'tenggorokan' => $request->get('fis5'),
					'leher' => $request->get('fis6'),
					'gigi' => $request->get('fis7'),
					'mulut' => $request->get('fis8'),
					'dada' => $request->get('fis9'),
					'abdomen' => $request->get('fis10'),
					'Ektremitas' => $request->get('fis11'),
					'Anogenital' => $request->get('fis12'),
					'flag' => '1',
            ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');

        return redirect()->route('fisik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fisik  $fisik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	
       dd($id.'andalus');
    }
	public function showjson($id)
    {
        $datas = DB::table('mcregistrasi as A')->join('mc_karyawan as B', 'A.idkaryawan', '=', 'B.nik')
		->join('perusahaan as C','B.idpt','=','C.id')
		->leftjoin('mc_fisik as D','D.idregister','=','A.idtrf')
		 ->select('D.id as idrek','A.idtrf','B.nik','B.namakaryawan','B.gender','B.tempat_lahir','B.tgl_lahir','B.dept_desc','B.line_desc','B.Jabatan_desc','B.alamat','B.photo','C.nama')
		 ->where('A.idtrf',$id)
		 ->get();
		  return response()->json($datas);	 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fisik  $fisik
     * @return \Illuminate\Http\Response
     */
    public function edit(Fisik $fisik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fisik  $fisik
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Fisik::create([
					'idregister' =>$request->get('idrek'),
					'flag' => '1',
            ]);
		alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('fisik.index');		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fisik  $fisik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fisik $fisik)
    {
        //
    }
	public function printpdf($id)
	{
	$datas = DB::table('mcregistrasi as A')
		->join('mc_karyawan as B', 'A.idkaryawan', '=', 'B.nik')
		->join('perusahaan as C','B.idpt','=','C.id')
		->leftjoin('mc_fisik as D','D.idregister','=','A.idtrf')
		 ->select('D.*','D.id as idrek','A.idtrf','B.nik','B.namakaryawan','B.gender','A.tglperiksa','B.tempat_lahir','B.tgl_lahir','B.dept_desc','B.line_desc','B.Jabatan_desc','B.alamat','B.photo','C.nama')
		 ->where('D.id',$id)
		 ->get();
		// return view('fisik.print_pdf',compact('datas'));
		$pdf = PDF::loadView('fisik.print_pdf',compact('datas'));
         return $pdf->stream('mcregister'.date('Y-m-d_H-i-s').'.pdf');
	}
	
}

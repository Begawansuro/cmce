<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urin;
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
class UrinController extends Controller
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
				->leftjoin('mc_urin as D','D.idregister','=','A.idtrf')
				->select('A.idtrf','D.id as idfisik','D.flag','B.nik','B.namakaryawan','B.gender','B.tempat_lahir','B.tgl_lahir','B.dept_desc','B.line_desc','B.Jabatan_desc','B.alamat','B.photo','C.nama')
				->get();
        return view('urin.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('urin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Urin  $urin
     * @return \Illuminate\Http\Response
     */
    public function show(Urin $urin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Urin  $urin
     * @return \Illuminate\Http\Response
     */
    public function edit(Urin $urin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Urin  $urin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $count = Urin::where('idregister',$request->input('regis'))->count();

        if($count>0){
		    $Urin = Urin::find($request->get('idfisik'));
			$Urin->update([
						'idregister'=> $request->get('regis'), 
						'kejernian'=> $request->get('uri1'),
						'berat'=> $request->get('uri2'),
						'ph'=> $request->get('uri3'), 
						'protein'=> $request->get('uri4'), 
						'glukosa'=> $request->get('uri5'),
						'keton'=> $request->get('uri6'),
						'bilirubin'=> $request->get('uri7'),
						'uro'=> $request->get('uri8'),
						'leo'=> $request->get('uri9'),
						'haem'=> $request->get('uri10'),
						'nitrit'=> $request->get('uri11'),
						'leco'=> $request->get('uri12'),
						'eri_urin'=> $request->get('sed1'),
						'leo_urin'=> $request->get('sed2'),
						'epitel'=> $request->get('sed3'),
						'silinder'=> $request->get('sed4'),
						'kristal'=> $request->get('sed5'),
						'lain'=> $request->get('sed6'),
						'kosistensi'=> $request->get('Fae1'),
						'warna'=> $request->get('Fae2'),
						'darah'=> $request->get('Fae3'),
						'lendir'=> $request->get('Fae4'),
						'eri_fae'=> $request->get('Fae5'),
						'leu_fae'=> $request->get('Fae6'),
						'amoeba'=> $request->get('Fae7'),
						'kista'=> $request->get('Fae8'),
						'telurcacing'=> $request->get('Fae9'),
						'faekristal'=> $request->get('Fae10'),
						'lain_fae'=> $request->get('Fae11'),
						'thorax'=> $request->get('Fae12'),
						'ecg'=> $request->get('Fae13'),
						'fisikdokter'=> $request->get('Fae14'),
						'flag'=> '2',
                ]);
			alert()->success('Berhasil.','Data telah disimpan!');
			return redirect()->route('fisik.index');
        }

        $this->validate($request, [
            'regis' => 'required',
        ]);

        Urin::create([
					   'idregister'=> $request->get('regis'), 
						'kejernian'=> $request->get('uri1'),
						'berat'=> $request->get('uri2'),
						'ph'=> $request->get('uri3'), 
						'protein'=> $request->get('uri4'), 
						'glukosa'=> $request->get('uri5'),
						'keton'=> $request->get('uri6'),
						'bilirubin'=> $request->get('uri7'),
						'uro'=> $request->get('uri8'),
						'leo'=> $request->get('uri9'),
						'haem'=> $request->get('uri10'),
						'nitrit'=> $request->get('uri11'),
						'leco'=> $request->get('uri12'),
						'eri_urin'=> $request->get('sed1'),
						'leo_urin'=> $request->get('sed2'),
						'epitel'=> $request->get('sed3'),
						'silinder'=> $request->get('sed4'),
						'kristal'=> $request->get('sed5'),
						'lain'=> $request->get('sed6'),
						'kosistensi'=> $request->get('Fae1'),
						'warna'=> $request->get('Fae2'),
						'darah'=> $request->get('Fae3'),
						'lendir'=> $request->get('Fae4'),
						'eri_fae'=> $request->get('Fae5'),
						'leu_fae'=> $request->get('Fae6'),
						'amoeba'=> $request->get('Fae7'),
						'kista'=> $request->get('Fae8'),
						'telurcacing'=> $request->get('Fae9'),
						'faekristal'=> $request->get('Fae10'),
						'lain_fae'=> $request->get('Fae11'),
						'thorax'=> $request->get('Fae12'),
						'ecg'=> $request->get('Fae13'),
						'fisikdokter'=> $request->get('Fae14'),
						'flag'=> '2',
            ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');

        return redirect()->route('urin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Urin  $urin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Urin $urin)
    {
        //
    }
}

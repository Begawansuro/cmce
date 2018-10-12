<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dokter;
use App\Pegawai;
use App\Paket;
use App\Mcregister;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class McregisterController extends Controller
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
		// return redirect()->route('mcregister.index');
		// dd('ss');
			
		 return view('mcregister.register');
		
    }
	
	public function mcregisterpdf($id)
	{
	
	
		$datas=DB::table('mc_karyawan as A')->join('mcregistrasi as B', 'A.nik', '=', 'B.idkaryawan')
								 ->where('idtrf',$id )
								 ->select('*')->get();
		
		// return view('mcregister.print_pdf',compact('data'));
		 $pdf = PDF::loadView('mcregister.print_pdf',compact('datas'));
         return $pdf->stream('mcregister'.date('Y-m-d_H-i-s').'.pdf');
        // return $pdf->download('mcregister'.date('Y-m-d_H-i-s').'.pdf');
		/*
	*/
	
	}
	public function dokter()
	{
		$json = Dokter::all();
        return response()->json($json);
	}
	public function paket()
	{
		$json = Paket::all();
        return response()->json($json);
	}
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
		 $this->validate($request, [
            'nip' => 'required',
            'dokter' => 'required',
            'tglperiksa' => 'required',
        ]);
		
		$paket=$request->get('paketlama');
		if(!empty($request->get('paketbaru') )){
			$paket=$request->get('paketbaru');
		}
		
		$getRow = Mcregister::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();

        $kode = "REK000000001";
        
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "REK00000000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "REK0000000".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "REK000000".''.($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                    $kode = "REK00000".''.($lastId->id + 1);
            } else if ($lastId->id < 99999) {
                    $kode = "REK0000".''.($lastId->id + 1);
            } else if ($lastId->id < 999999) {
                    $kode = "REK000".''.($lastId->id + 1);
            } else if ($lastId->id < 9999999) {
                    $kode = "REK00".''.($lastId->id + 1);
            } else if ($lastId->id < 99999999) {
                    $kode = "REK0".''.($lastId->id + 1);
            } else {
                    $kode = "REK".''.($lastId->id + 1);
            }
        }

		
        Mcregister::create([
                'idkaryawan' => $request->get('nip'),
                'idtrf' => $kode,
                'tglperiksa' => $request->get('tglperiksa'),
                'dok_id' => $request->get('dokter'),
                'pakett' => $paket,
            ]);

        // alert()->success('Berhasil.','Data telah ditambahkan!');
		$datas=DB::table('mc_karyawan as A')->join('mcregistrasi as B', 'A.nik', '=', 'B.idkaryawan')
								 ->where('nik',$request->get('nip') )
								 ->select('*')->get();
		
		 $pdf = PDF::loadView('mcregister.print_pdf',compact('datas'));
         return $pdf->stream('mcregister'.date('Y-m-d_H-i-s').'.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mcregister  $mcregister
     * @return \Illuminate\Http\Response
     */
    public function show(Mcregister $mcregister)
    {
        //
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mcregister  $mcregister
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcregister $mcregister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mcregister  $mcregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mcregister $mcregister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mcregister  $mcregister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mcregister $mcregister)
    {
        //
    }
}

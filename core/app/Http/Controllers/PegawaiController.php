<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Perusahaan;
use App\Pegawai;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
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
      $perusahaan   = Perusahaan::get();
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = DB::table('mc_karyawan as A')->join('perusahaan as B', 'A.idpt', '=', 'B.id')
		 ->select('*')->get();
        return view('karyawan.index', compact('perusahaan','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }
		$datas   = Perusahaan::get();
        return view('karyawan.create',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'pt' => 'required',
            'nama' => 'required',
        ]);
        Karyawan::create([
                'pt_id' => $request->get('pt'),
                'nik' => $request->get('nik'),
                'nama_k' => $request->get('nama'),
                'gender' => $request->get('gender'),
                'pendidikan' => $request->get('pendidikan'),
                'tmp_lahir' => $request->get('tmppat'),
                // 'tgl_lahir' => $request->get('namapt'),
                'adr_k' => $request->get('adr'),
            ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');
	
        return redirect()->route('karyawan.index');
    }
	public function ajaxpegawai($id){
		// $json = Pegawai::where('nik',$id)->get();
		$json =DB::table('mc_karyawan as A')->join('perusahaan as B', 'A.idpt', '=', 'B.id')
		 ->where('nik',$id)
		 ->select('*','A.id as cc')->get();
        return response()->json($json);
	}
	public function savephoto(Request $request,$id)
    {
	
	 // Pegawai::find($request->get('id'))->update([
             // 'photo' => $request->get('img'),
                // ]);
		$Pegawai = Pegawai::find($id);
        $Pegawai->photo = $request->img;
        $Pegawai->save();
		
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
		$product = Karyawan::find($id);
        $product->photo = $request->img;
        $product->save();
		
		alert()->success('Berhasil.','Data telah ditambahkan!');
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
		dd('updatepegawai');
		$product =DB::table('mc_karyawan')
								 ->where('nik',$id)
								 ->select('*')->get(); 
        $product->photo = $request->img;
        $product->save();
		
		alert()->success('Berhasil.','Data telah ditambahkan!');
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}

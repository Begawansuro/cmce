<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Karyawan;
use App\Perusahaan;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use RealRashid\SweetAlert\Facades\Alert;


class KaryawanController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
		dd('showkarywan');
		//dd($request->get('tag')."dafatreshow");
		$datas=$request->get('id');
		return view('karyawan.register',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
	  public function daftar($id)
    {
	// dd($id);
		$datas   = Perusahaan::get();
        return $datas;
    }
	public function savephoto(Request $request)
    {
	dd('asukaryawan');
	
	 Karyawan::find($request->get('id'))->update([
             'photo' => $request->get('img'),
                ]);
    }
	
    public function edit($id)
    {
        //
		dd('lim');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
		dd('looor');
		$product = Karyawan::find($id);
        $product->photo = $request->img;
        $product->save();
		
		alert()->success('Berhasil.','Data telah ditambahkan!');
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}

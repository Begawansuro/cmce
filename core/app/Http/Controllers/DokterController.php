<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = DB::table('karyawan as A')->join('perusahaan as B', 'A.pt_id', '=', 'B.id')
		->select('*')->get();
        return view('dokter.index', compact('datas'));
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
            'nik' => 'required',
            'nama' => 'required',
            'special' => 'required',
        ]);
        Karyawan::create([
                'nik' => $request->get('pt'),
                'nama_dok' => $request->get('nik'),
                'gender' => $request->get('gender'),
                'pendidikan' => $request->get('pendidikan'),
                'tmp_lahir' => $request->get('tmppat'),
                // 'tgl_lahir' => $request->get('namapt'),
                'adr_k' => $request->get('adr'),
                'Spesial' => $request->get('adr'),
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
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
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

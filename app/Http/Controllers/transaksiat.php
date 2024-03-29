<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi_at;

class transaksiat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alatterapi = transaksi_at::all();
        return view('alat_terapi.transalat', [
            'at'=>$alatterapi
        ]);
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
        $dataat=[
            'tgl' => $request->tglat,
            'no_kwitansi' => $request->noat,
            'id_barang' => $request->idat,
            'jml_barang' => $request->jmlat
        ];

        transaksi_at::insert($dataat);
        return redirect('transalat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        $alatterapi=transaksi_at::where('id_barang', '=', $id_barang)->get();
        $edit=1;
        $alat = transaksi_at::all();
               
        return view ('alat_terapi.transalat', [
            'idat'=>$alatterapi,
            'id_barang'=>$id_barang, 
            'edit'=>$edit,
            'at'=>$alat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang)
    {
        $dataat=[
            'tgl' => $request->tglat,
            'no_kwitansi' => $request->noat,
            'id_barang' => $request->idat,
            'jml_barang' => $request->jmlat
        ];

        $apa=transaksi_at::where('id_barang', $id_barang);
        $apa->update($dataat);
        return redirect('transalat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barang)
    {
        $alatterapi=transaksi_at::where('id_barang', '=', $id_barang);
        $alatterapi->delete();

        return redirect('transalat');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\LaporanNelayan;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanNelayanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanNelayans = LaporanNelayan::all();
        return view('laporan-nelayan.index', compact("laporanNelayans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasis = Lokasi::all();
        return view('laporan-nelayan.create', compact("lokasis"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new LaporanNelayan();
        $new->id_lokasi = $request->id_lokasi;
        $new->id_nelayan = Auth::user()->id;
        $new->isi_laporan = $request->isi_laporan;
        $new->tanggal = $request->tanggal;
        $new->save();

        return redirect()->route('laporan-nelayan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanNelayan  $laporanNelayan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanNelayan $laporanNelayan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanNelayan  $laporanNelayan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporanNelayan = LaporanNelayan::find($id);
        $lokasis = Lokasi::all();
        return view('laporan-nelayan.edit', compact("laporanNelayan", "lokasis"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanNelayan  $laporanNelayan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = LaporanNelayan::find($id);
        $new->id_lokasi = $request->id_lokasi;
        $new->isi_laporan = $request->isi_laporan;
        $new->tanggal = $request->tanggal;
        $new->save();

        return redirect()->route('laporan-nelayan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanNelayan  $laporanNelayan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasi = LaporanNelayan::find($id);
        $lokasi->delete();

        return redirect()->route('laporan-nelayan.index');
    }
}

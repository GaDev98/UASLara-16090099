<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\TblManga;
use App\TblKomik;

class SemuaMangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $urutanawalmanga = TblManga::orderBy('created_at', 'desc')->get();
        return view('User.menu.manga.semuamanga', compact('urutanawalmanga', 'mangamenu', 'komikmenu'));
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
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $urutanawalmanga = TblManga::orderBy('created_at', 'desc')->get();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $manga = DB::table('TblManga')
        ->where('judul','like',"%".$cari."%");
 
            // mengirim data pegawai ke view index
        return view('User.menu.manga.semuamanga', compact('manga','urutanawalmanga','mangamenu', 'komikmenu'));
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

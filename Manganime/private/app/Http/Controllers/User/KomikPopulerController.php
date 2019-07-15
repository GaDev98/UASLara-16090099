<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TblKomik;
use App\TblManga;

class KomikPopulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $komik = TblKomik::orderBy('skor','desc')->limit(1)->get();
        $komik = TblKomik::where('skor', 8 )->get();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $urutanawalkomik = TblKomik::orderBy('created_at', 'desc')->get();
        return view('User.menu.komik.komikpopuler', compact('komik', 'mangamenu', 'komikmenu','urutanawalkomik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mangapopuler()
    {

        // $komik = TblKomik::orderBy('skor','desc')->limit(1)->get();
        $manga = TblManga::where('skor', 8 )->get();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $urutanawalmanga = TblManga::orderBy('created_at', 'desc')->get();
        return view('User.menu.manga.mangapopuler', compact('manga', 'mangamenu', 'komikmenu','urutanawalmanga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mangaterbaik()
    {

        // $komik = TblKomik::orderBy('skor','desc')->limit(1)->get();
        $mangaterbaik = TblManga::where('skor', 9 )->get();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $urutanawalmanga = TblManga::orderBy('created_at', 'desc')->get();
        return view('User.menu.manga.mangaterbaik', compact('mangaterbaik', 'mangamenu', 'komikmenu','urutanawalmanga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function semuakomik()
    {

        // $komik = TblKomik::orderBy('skor','desc')->limit(1)->get();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $urutanawalkomik = TblKomik::orderBy('created_at', 'desc')->get();
        return view('User.menu.komik.semuakomik', compact('mangamenu', 'komikmenu','urutanawalkomik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function skorterbaik()
    {
        $komikterbaik = TblKomik::where('skor', 9 )->get();
        // $komik = TblKomik::orderBy('skor','desc')->limit(1)->get();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        $urutanawalkomik = TblKomik::orderBy('created_at', 'desc')->get();
        return view('User.menu.komik.skorterbaik', compact('mangamenu', 'komikmenu','urutanawalkomik','komikterbaik'));
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

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TblKomik;
use App\TblManga;
use App\TblKomentar;
use App\TblUser;
use Auth;

class KomentarMangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangakomentar = TblKomentar::where('jenis_komentar', 'manga' )->paginate(5);
        $id = Auth::user()->id;
        $user = TblUser::find($id);
        $komen_num_ma = TblKomentar::where('dikomentar', 'DR. STONE')->count();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        return view('User.menu.manga.komentarmanga', compact('mangakomentar', 'mangamenu', 'komikmenu','user', 'komen_num_ma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function komentarkomik (){
        $komikkomentar = TblKomentar::where('jenis_komentar', 'komik' )->paginate(5);
        $id = Auth::user()->id;
        $userkko = TblUser::find($id);
        $komen_num = TblKomentar::where('dikomentar','Haikyuu!!; High Kyuu!!; HQ!!')->count();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        return view ('User.menu.komik.komentarkomik', compact('komikkomentar','mangamenu', 'komikmenu', 'userkko', 'komen_num'));
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TblManga;
use App\TblKomik;
use App\TblKomentar;
use App\TblUser;
use Auth;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahawal = TblManga::paginate(6);
        $jumlahmanga = TblManga::orderBy('judul','desc')->count();
        $jumlahkomik = TblKomik::orderBy('judul','desc')->count();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        return view('User.menu.usercontent', compact('jumlahawal', 'mangamenu', 'komikmenu','jumlahmanga','jumlahkomik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.menu.manga.detailmanga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->nama == null) {
            return redirect()->route('KomentarManga.create')->with('error', 'Nama tidak boleh kosong');
        }else if($request->dikomentar == null) {
            return redirect()->route('KomentarManga.create')->with('error', 'Nama Anime tidak boleh kosong');
        }else if($request->jenis_komentar == null) {
            return redirect()->route('KomentarKomik.create')->with('error', 'Jenis Komentar tidak boleh kosong');
        }else if($request->tgl_komen == null) {
            return redirect()->route('KomentarManga.create')->with('error', 'Tanggal Anda Berkomentar tidak boleh kosong');
        }else if($request->komentar == null) {
            return redirect()->route('KomentarManga.create')->with('error', 'Komentar Anda tidak boleh kosong');
        }

        TblKomentar::create([
            'nama' => $request->nama,
            'dikomentar' => $request->dikomentar,
            'jenis_komentar' => $request->jenis_komentar,
            'tgl_komen' => $request->tgl_komen,
            'komentar' => $request->komentar,
            'gambar' => $request->gambar
        ]);

       

        return redirect ()->route('Detail',  $request->id)->with('success', 'Tambah Data Berhasil');
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
    public function detail($id)
    {
        
        $manganime_user = TblManga::find($id);
        $id = Auth::user()->id;
        $user = TblUser::find($id);
        $hitungmanga = TblManga::orderBy('judul','desc')->count();
        $hitungkomik = TblKomik::orderBy('judul','desc')->count();
        $hitungkomentar = TblKomentar::orderBy('jumlah','desc')->count();
        $mangamenu = TblManga::orderBy('judul','desc')->limit(3)->get();
        $komikmenu = TblKomik::orderBy('judul','desc')->limit(3)->get();
        return view('User.menu.manga.detailmanga', compact('manganime_user', 'mangamenu', 'komikmenu', 'user','hitungmanga','hitungkomik','hitungkomentar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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

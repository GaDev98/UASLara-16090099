<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TblKomik;

class DataKomikAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urutanawalkomik = TblKomik::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.Partial.DataKomik.datakomik', compact('urutanawalkomik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Partial.DataKomik.tambahkomik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->judul == null) {
            return redirect()->route('DataKomik.create')->with('error', 'Judul tidak boleh kosong');
        }else if($request->sinopsis == null) {
            return redirect()->route('DataKomik.create')->with('error', 'Sinopsis tidak boleh kosong');
        }else if($request->buatan == null) {
            return redirect()->route('DataKomik.create')->with('error', 'Buatan tidak boleh kosong');
        }else if($request->genre == null) {
            return redirect()->route('DataKomik.create')->with('error', 'Genre tidak boleh kosong');
        }else if($request->tanggal_rilis == null) {
            return redirect()->route('DataKomik.create')->with('error', 'Tanggal Rilis tidak boleh kosong');
        }else if($request->pengarang == null) {
            return redirect()->route('DataKomik.create')->with('error', 'pengarang tidak boleh kosong');
        }else if($request->skor == null) {
            return redirect()->route('DataKomik.create')->with('error', 'skor tidak boleh kosong');
        }

        $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

        $imageName = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageName);

        TblKomik::create([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'buatan' => $request->buatan,
            'genre' => $request->genre,
            'tanggal_rilis' => $request->tanggal_rilis,
            'pengarang' => $request->pengarang,
            'skor' => $request->skor,
            'gambar' => $imageName
        ]);
        return redirect ()->route('DataKomik.index')->with('success', 'Tambah Data Berhasil');
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
        $komik = TblKomik::find($id);
        return view ('Admin.Partial.DataKomik.editkomik', compact('komik'))->with('komik', $komik);
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
        $komik = TblKomik::find($id);
        if($request->judul == null) {
            return redirect()->route('DataKomik.edit', $komik->id)->with('error', 'Judul tidak boleh kosong');
        }else if($request->sinopsis == null) {
            return redirect()->route('DataKomik.create', $komik->id)->with('error', 'Sinopsis tidak boleh kosong');
        }else if($request->buatan == null) {
            return redirect()->route('DataKomik.create', $komik->id)->with('error', 'Buatan tidak boleh kosong');
        }else if($request->genre == null) {
            return redirect()->route('DataKomik.create', $komik->id)->with('error', 'Genre tidak boleh kosong');
        }else if($request->tanggal_rilis == null) {
            return redirect()->route('DataKomik.create', $komik->id)->with('error', 'Tanggal Rilis tidak boleh kosong');
        }else if($request->pengarang == null) {
            return redirect()->route('DataKomik.create', $komik->id)->with('error', 'pengarang tidak boleh kosong');
        }else if($request->skor == null) {
            return redirect()->route('DataKomik.create', $komik->id)->with('error', 'skor tidak boleh kosong');
        }
            if($request->file('gambar') == "") {
                $komik->gambar = $komik->gambar;
            } else {
                unlink('private/storage/app/public/gambar/' .$komik->gambar);
                $this->validate($request, [
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                $imageName = $request->gambar->getClientOriginalName();
                $request->gambar->storeAs('public/gambar', $imageName);
            }            


        $komik->update([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'buatan' => $request->buatan,
            'genre' => $request->genre,
            'tanggal_rilis' => $request->tanggal_rilis,
            'pengarang' => $request->pengarang,
            'skor' => $request->skor,
            'gambar' => $imageName
        ]);
        return redirect ()->route('DataKomik.index')->with('info', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komik = TblKomik::find($id);
        $gambar = $komik->gambar;
        unlink('private/storage/app/public/gambar/'. $komik->gambar);
        $komik->delete();
        return redirect('DataKomik')->with('error','data berhasil dihapus');
    }
}

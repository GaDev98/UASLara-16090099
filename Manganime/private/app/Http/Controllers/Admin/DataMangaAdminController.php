<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TblManga;

class DataMangaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $manganime = \DB::table('TblManga')->paginate();
        
        $urutanawal = TblManga::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.Partial.DataManga.datamanga', compact('urutanawal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Partial.DataManga.tambahmanga');
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
            return redirect()->route('DataManga.create')->with('error', 'Judul tidak boleh kosong');
        }else if($request->sinopsis == null) {
            return redirect()->route('DataManga.create')->with('error', 'Sinopsis tidak boleh kosong');
        }else if($request->genre == null) {
            return redirect()->route('DataManga.create')->with('error', 'Genre tidak boleh kosong');
        }else if($request->musim == null) {
            return redirect()->route('DataManga.create')->with('error', 'Musim tidak boleh kosong');
        }else if($request->tanggal_rilis == null) {
            return redirect()->route('DataManga.create')->with('error', 'Tanggal Rilis tidak boleh kosong');
        }else if($request->status == null) {
            return redirect()->route('DataManga.create')->with('error', 'Status tidak boleh kosong');
        }else if($request->pengarang == null) {
            return redirect()->route('DataManga.create')->with('error', 'pengarang tidak boleh kosong');
        }else if($request->skor == null) {
            return redirect()->route('DataManga.create')->with('error', 'skor tidak boleh kosong');
        }

        $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
            ]);

        $imageName = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageName);


        TblManga::create([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'genre' => $request->genre,
            'musim' => $request->musim,
            'tanggal_rilis' => $request->tanggal_rilis,
            'status' => $request->status,
            'pengarang' => $request->pengarang,
            'skor' => $request->skor,
            'gambar' => $imageName
        ]);
        return redirect ()->route('DataManga.index')->with('success', 'Tambah Data Berhasil');
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
     * @param  int  $id_manga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manganime = TblManga::find($id);
        return view ('Admin.Partial.DataManga.editmanga', compact('manganime'))->with('manganime', $manganime);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_manga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $manganime = TblManga::find($id);
        if($request->judul == null) {
            return redirect()->route('DataManga.edit', $manganime->id)->with('error', 'Judul tidak boleh kosong');
        }else if($request->sinopsis == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'Sinopsis tidak boleh kosong');
        }else if($request->genre == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'Genre tidak boleh kosong');
        }else if($request->musim == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'Musim tidak boleh kosong');
        }else if($request->tanggal_rilis == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'Tanggal Rilis tidak boleh kosong');
        }else if($request->status == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'Status tidak boleh kosong');
        }else if($request->pengarang == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'pengarang tidak boleh kosong');
        }else if($request->skor == null) {
            return redirect()->route('DataManga.create',$manganime->id)->with('error', 'skor tidak boleh kosong');
        }
        
            if($request->file('gambar') == "") {
                $manganime->gambar = $manganime->gambar;
            } else {
                unlink('private/storage/app/public/gambar/' .$manganime->gambar);
                $this->validate($request, [
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000'
                ]);
                $imageName = $request->gambar->getClientOriginalName();
                $request->gambar->storeAs('public/gambar', $imageName);
            }           


        $manganime->update([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'genre' => $request->genre,
            'musim' => $request->musim,
            'tanggal_rilis' => $request->tanggal_rilis,
            'status' => $request->status,
            'pengarang' => $request->pengarang,
            'skor' => $request->skor,
            'gambar' => $imageName
        ]);
        return redirect ()->route('DataManga.index')->with('info', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manganime = TblManga::find($id);
        $gambar = $manganime->gambar;
        unlink('private/storage/app/public/gambar/'. $manganime->gambar);
        $manganime->delete();
        return redirect('DataManga')->with('error','data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblUser;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
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
            return redirect()->route('Register.create')->with('error', 'Nama tidak boleh kosong');
        }else if($request->email == null) {
            return redirect()->route('Register.create')->with('error', 'Email tidak boleh kosong');
        }else if($request->alamat == null) {
            return redirect()->route('Register.create')->with('error', 'Alamat tidak boleh kosong');
        }else if($request->password == null) {
            return redirect()->route('Register.create')->with('error', 'Password tidak boleh kosong');
        }else if($request->tgl_lahir == null) {
            return redirect()->route('Register.create')->with('error', 'Tanggal Lahir tidak boleh kosong');
        }else if($request->Status_Sekolah == null) {
            return redirect()->route('Register.create')->with('error', 'Status Sekolah tidak boleh kosong');
        }

        $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000'
            ]);

        $imageName = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/gambar', $imageName);

        TblUser::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
            'tgl_lahir' => $request->tgl_lahir,
            'Status_Sekolah' => $request->Status_Sekolah,
            'gambar' => $imageName
        ]);
        return redirect ()->route('login')->with('success', 'Tambah Data Berhasil');
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

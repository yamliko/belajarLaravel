<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Models\Pegawaii;

class PegawaiiController extends Controller
{
    public function index(){

         // mengambil data pegawai
     $pegawaii = Pegawaii::all();
 
        

    
        // mengirim data pegawai ke view pegawai
        return view('pegawaii', ['pegawaii' => $pegawaii]);
    
    }
    public function tambah(){
        return view('pegawaii_tambah');
   }
   public function store(Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required'
    ]);

    Pegawaii::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat
    ]);

    return redirect('/pegawaii');
}
public function edit($id)
{
   $pegawaii = Pegawaii::find($id);
   return view('pegawaii_edit', ['pegawaii' => $pegawaii]);
}
public function update($id, Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required'
    ]);

    $pegawaii = Pegawaii::find($id);
    $pegawaii->nama = $request->nama;
    $pegawaii->alamat = $request->alamat;
    $pegawaii->save();

    return redirect('/pegawaii');
}
public function delete($id)
{
    $pegawaii = Pegawaii::find($id);
    $pegawaii->delete();
    return redirect('/pegawaii');
}


    
}
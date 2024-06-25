<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Models\guru;

class GuruController extends Controller
{
    public function index(){

         // mengambil data pegawai
     $guru = guru::all();
     return view ('guru', ['guru' => $guru]);
    }

        // hapus sementara
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
    
        return redirect('/guru');
    }

        // menampilkan data guru yang sudah dihapus
    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

        // restore data guru yang dihapus
    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id',$id);
        $guru->restore();
        return redirect('/guru/trash');
    }

        // restore semua data guru yang sudah dihapus
    public function kembalikan_semua()
    {
        
        $guru = Guru::onlyTrashed();
        $guru->restore();
    
        return redirect('/guru/trash');
    }

        // hapus permanen
    public function hapus_permanen($id)
    {
        // hapus permanen data guru
        $guru = Guru::onlyTrashed()->where('id',$id);
        $guru->forceDelete();
    
        return redirect('/guru/trash');
    }

        // hapus permanen semua guru yang sudah dihapus
    public function hapus_permanen_semua()
    {
        // hapus permanen semua data guru yang sudah dihapus
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();
    
        return redirect('/guru/trash');
    }
}
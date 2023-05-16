<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function create(){
        return view('backend.jabatan.create');
    }

    public function store(Request $request)
    {
        // fungsi validasi inputan pengguna
        $valid = $request->validate([
            'nama_jabatan' => 'required',
            'status' => 'required',
            'gaji_jabatan' => 'required',
        ]);
        
        // fungsi masukan data ke database
        Jabatan::create($valid);
        
        // fungsi mengalihkan ke halaman lain setelah data masuk ke database
        return to_route('buat jabatan')->with('pesan', 'berhasil tambah jabatan baru');
    }
}

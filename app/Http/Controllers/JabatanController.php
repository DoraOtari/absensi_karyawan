<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function create(){
        return view('backend.jabatan.create');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama_jabatan' => $request->nama_jabatan,
            'status' => $request->status,
            'gaji_jabatan' => $request->gaji_jabatan,
        ]);

        
    }
}

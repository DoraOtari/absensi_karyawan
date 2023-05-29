<?php
// -View [backend.karyawan.tampil] not found.
// +cek nama return view & pastikan sesuai dengan lokasi file asli di folder resources views
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function tampil()
    {
        return view('backend.karyawan.tampil');
    }

    public function buat()
    {
        return view('backend.karyawan.buat');
    }
}

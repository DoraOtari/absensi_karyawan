<?php
// -View [backend.karyawan.tampil] not found.
// +cek nama return view & pastikan sesuai dengan lokasi file asli di folder resources views
namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\User;

class KaryawanController extends Controller
{
    public function tampil()
    {
        $karyawan = Karyawan::with('jabatan','user')->get();
        return view('backend.karyawan.tampil', compact('karyawan'));
    }

    public function buat()
    {
        $user = User::select('id','email')->get();
        $jabatan = Jabatan::select('id','nama_jabatan')->get();
        return view('backend.karyawan.buat', compact('user', 'jabatan'));
    }

    public function simpan(Request $request)
    {
        Karyawan::create([
            'user_id' => $request->user_id,
            'jabatan_id' => $request->jabatan_id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_mulai_bekerja' => $request->tanggal_mulai_bekerja,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
        ]);

        return redirect('/karyawan')->with('pesan', 'berhasil tambah data karyawan');
    }
}

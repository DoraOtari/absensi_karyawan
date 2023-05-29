@extends('layouts.backend')
@section('konten')
    <div class="col-lg-8 mx-auto card shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>Foto</td>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Jabatan</td>
                        <td>Email</td>
                        <td>Detail</td>
                        <td>Edit</td>
                        <td>Hapus</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8" class="text-center">
                            <h4 class="text-capitalize">
                                <i class="bi-search"></i> tidak ditemukan data di database
                            </h4>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ url('karyawan/buat') }}" class="btn btn-outline-dark"><i class="bi-plus"></i> Buat</a>
            </div>
        </div>
    </div>
@endsection
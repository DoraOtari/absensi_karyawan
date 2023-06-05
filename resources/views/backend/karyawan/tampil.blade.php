@extends('layouts.backend')
@section('konten')
<div class="col-lg-8 mx-auto ">
    
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
        </div> 
    @endif

    <div class="card shadow">
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
                    @forelse ($karyawan as $item)
                        <tr>
                            <td><img width="45" class="rounded-circle" src="{{ asset('storage/'.$item->user->foto_profil) }}" alt=""></td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jabatan->nama_jabatan }}</td>
                            <td>{{ $item->user->email }}</td>
                            <td>
                                <button class="btn btn-outline-info"><i class="bi-eye"></i></button>
                            </td>
                            <td>
                                <a href="{{ url('karyawan/'.$item->id.'/edit') }}" class="btn btn-outline-success"><i class="bi-pen"></i></a>
                            </td>
                            <td>
                                <form action="{{ url('karyawan', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-success"><i class="bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            <h4 class="text-capitalize">
                                <i class="bi-search"></i> tidak ditemukan data di database
                            </h4>
                        </td>
                    </tr>
                    
                    @endforelse
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ url('karyawan/buat') }}" class="btn btn-outline-dark"><i class="bi-plus"></i> Buat</a>
            </div>
        </div>
    </div>
</div>
@endsection
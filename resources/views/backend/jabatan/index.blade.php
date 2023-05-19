@extends('layouts.backend')
@section('konten')
@php
    function rp($data){
        return 'Rp. '.number_format($data,2,',','.');
    }
@endphp
    <div class="col-lg-8 mx-auto">
        <div class="card border-0">
            <div class="card-body">
                <h1 class="lead">Seluruh data jabatan</h1>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Jabatan</th>
                                <th>Status Jabatan</th>
                                <th>Gaji Jabatan</th>
                                <th>Ubah</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- fungsi untuk menampilkan seluruh data jabatan --}}
                            @foreach ($jabatan as $col)
                            <tr>
                                <td>{{ $col->nama_jabatan }}</td>
                                <td>{{ $col->status }}</td>
                                <td>{{ rp($col->gaji_jabatan) }}</td>
                                <td><a href="" class="btn btn-outline-primary"><i class="bi-pen"></i></a></td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger"><i class="bi-trash2"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            {{-- end --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
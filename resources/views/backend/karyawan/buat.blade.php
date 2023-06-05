@extends('layouts.backend')
@section('konten')
    <div class="col-lg-6 mx-auto shadow card mb-3">
        <div class="card-body">
            <p class="lead"><i class="bi-table"></i> Formulir Buat Karyawan</p>
            <hr>
            <form action="{{ url('karyawan') }}" method="post">
              @csrf
              {{-- nik --}}
              <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="masukan nik">
              </div>
              {{-- Nama --}}
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="masukan nama lengkap karyawan">
              </div>
              {{-- tgl mulai bekerja dan email --}}
              <div class="row">
                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Tanggal Mulai Bekerja</label>
                    <input type="date" class="form-control" name="tanggal_mulai_bekerja">
                  </div>
                  <div class="mb-3 col-lg-6">
                      <label for="" class="form-label">Email</label>
                      <select class="form-select" name="user_id">
                          <option selected disabled>--pilih satu--</option>
                          @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{ $item->email }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              {{-- jenis kelamin & jabatan --}}
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin">
                            <option selected disabled>--pilih satu--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Jabatan</label>
                        <select class="form-select" name="jabatan_id">
                            <option selected disabled>--pilih jabatan--</option>
                            @foreach ($jabatan as $item)
                              <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- provinsi & kota --}}
                @livewire('api-daerah-indo')
                <textarea name="alamat" class="form-control" placeholder="masukan alamat lengkap" cols="30" rows="3"></textarea>
                <button type="submit" class="btn btn-outline-dark mt-3 rounded-pill float-end">
                  <i class="bi-send"></i> Submit
                </button>
              </form>
        </div>
    </div>
@endsection
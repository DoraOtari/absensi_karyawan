@extends('layouts.backend')
@section('konten')
    <div class="col-lg-6 mx-auto shadow card">
        <div class="card-body">
            <p class="lead"><i class="bi-table"></i> Formulir Buat Karyawan</p>
            <hr>
            <form action="{{ url('karyawan') }}" method="post">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="nama" placeholder="masukan nama">
                </div>
                <div class="mb-3">
                  <label class="form-label">NIK</label>
                  <input type="text" class="form-control" name="nik" placeholder="masukan nik">
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                      <label class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                    <div class="mb-3 col-lg-6">
                      <label class="form-label">Tanggal Mulai Bekerja</label>
                      <input type="date" class="form-control" name="tanggal_mulai_bekerja">
                    </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="masukan email anda">
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin">
                            <option selected disabled>--pilih satu--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jabatan</label>
                        <select class="form-select" name="jabatan">
                            <option selected disabled>--pilih jabatan--</option>
                            <option value="L">Laki-laki</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
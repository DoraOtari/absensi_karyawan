@extends('layouts.backend')
@section('konten')
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi-clipboard-data"></i> Edit Jabatan</h5>
                    <hr>
                    <form action="{{ url('/jabatan',$pengguna->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-floating mb-3">
                            <input value="{{ $pengguna->nama_jabatan }}" name="nama_jabatan" type="text" class="form-control" id="nama_jabatan" placeholder="name@example.com">
                            <label for="nama_jabatan">Nama Jabatan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option selected disabled>pilih salah satu</option>
                              <option @selected($pengguna->status == 'staff') value="staff">Staff</option>
                              <option @selected($pengguna->status == 'kontrak') value="kontrak">kontrak</option>
                              <option @selected($pengguna->status == 'daily_worker') value="daily_worker">Daily Worker</option>
                            </select>
                            <label for="floatingSelect">Pilih Status Jabatan</label>
                          </div>
                        <div class="form-floating mb-3">
                            <input value="{{ $pengguna->gaji_jabatan }}" name="gaji_jabatan" type="text" class="form-control" id="gaji_jabatan" placeholder="name@example.com">
                            <label for="gaji_jabatan">Gaji Jabatan</label>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn gradasi rounded-pill"><i class="bi-plus"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
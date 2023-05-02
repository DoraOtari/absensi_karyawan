@extends('layouts.frontend')
@section('konten')
    <div class="d-flex justify-content-center">
        <div class="col-lg-4 position-absolute">
            <img class="img-fluid opacity-25" src="{{ asset('img/background login.jpg') }}" alt="">
        </div>
        <div class="col-lg-4">
            <div class="card bg-transparent border-0">
                <div class="card-body">
                    <h4 class="card-title"><i class="bi-window"></i> ABSEN</h4>
                    <h6 class="text-muted">silahkan masukan nik anda dengan benar</h6>
                    <hr>
                    <div class="row d-flex justify-content-between mb-3">
                        <div class="col-4 gradasi opacity-75 rounded-4">
                            <label>tanggal</label>
                            <input readonly type="date" value="{{ date('Y-m-d') }}" class="form-control-plaintext text-white" name="tanggal">
                        </div>
                        <div class="col-4 gradasi opacity-75 rounded-4">
                            <livewire:jam />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <input type="text" name="nik" class="form-control" placeholder="masukan nik anda">
                    </div>
                            <label for="" class="d-block">Keterangan</label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="keterangan" checked value="masuk">
                            <label class="form-check-label" for="">masuk</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="keterangan" value="keluar">
                            <label class="form-check-label" for="">keluar</label>
                          </div>
                    
                    <div class="text-end">
                        <button type="submit" class="btn gradasi rounded-pill"><i class="bi-send"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.frontend')
@section('konten')
    <div class="col-lg-4 mx-auto">
        <div class="card shadow border">
            <div class="card-body">
                <h4 class="card-title"><i class="bi-window"></i> ABSEN</h4>
                <h6 class="text-muted">silahkan masukan nik anda dengan benar</h6>
                <hr>
                <div class="row d-flex justify-content-around mb-3">
                    <div class="col-4 gradasi rounded-4">
                        <label>tanggal</label>
                        <input readonly type="date" value="{{ date('Y-m-d') }}" class="form-control-plaintext text-white" name="tanggal">
                    </div>
                    <div class="col-4 gradasi rounded-4">
                        <label>Jam</label>
                        <input readonly type="text" value="{{ date('h:i:s') }}" class="form-control-plaintext text-white" name="jam">
                    </div>
                </div>
                <div class="row mb-3">
                    <input type="text" name="nik" class="form-control" placeholder="masukan nik anda">
                </div>
                        <label for="" class="d-block">Keterangan</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="keterangan" checked value="checkin">
                        <label class="form-check-label" for="">checkin</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="keterangan" value="checkout">
                        <label class="form-check-label" for="">checkout</label>
                      </div>
                
                <div class="text-end">
                    <button type="submit" class="btn gradasi rounded-pill"><i class="bi-send"></i> Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
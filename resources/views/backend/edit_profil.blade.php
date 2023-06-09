@extends('layouts.backend')
@section('konten')
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Profil</h4>
                <hr>
                <form action="{{ url('profil',auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <label class="form-label">Upload Foto</label>
                    <input type="file" name="foto" accept="image/*" id="" class="form-control">
                    <div class="my-3 text-end">
                        <button type="submit" class="btn btn-dark">
                            <i class="bi-upload"></i> Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
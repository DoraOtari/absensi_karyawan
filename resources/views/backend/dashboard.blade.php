@extends('layouts.backend')
@section('konten')
<div class="container px-0">
    <section id="hero">
        <div class="row d-flex justify-content-evenly pt-lg-5 px-3 px-lg-0 gap-5">
            <div class="col-lg-5">
                <h1 class="text-uppercase fw-bolder display-2 my-0">the productivity</h1>
                <h2 class="text-capitalize f-judul display-4 my-0"><b class="text-primary">Worker</b></h2>
                    <figure>
                        <blockquote class="blockquote">
                            <p class="lead">
                                "Satu-satunya cara untuk melakukan pekerjaan hebat adalah dengan mencintai apa yang kamu lakukan."
                            </p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Steve Jobs
                        </figcaption>
                    </figure>
                    <a href="{{ url('/karyawan/performa') }}" class="btn btn-lg gradasi border-0">
                        Lihat Performa mu <i class="bi-arrow-up-right"></i>
                    </a>
            </div>
            <div class="col-lg-4">
                <img src="https://img.freepik.com/free-vector/man-holding-clock-time-management-concept_23-2148823171.jpg?w=740&t=st=1683034542~exp=1683035142~hmac=80d07e4704aba9a28e7f251045dd278f66789cab8032e1b1ebca30848f7a2873" class="img-fluid w-100" alt="">
            </div>
            </div>
        </section>
    </div>
@endsection


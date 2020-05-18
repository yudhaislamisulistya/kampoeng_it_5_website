@extends('layouts.adminmember')
@section('content')
@php
$class = '';
$classstatuslombancsiswa = '';
$classstatuslombancmahasiswa = '';
$classstatuslombadgsiswa = '';
$classstatuslombadgumum = '';
if ($status == 1) {
$class = "disabled";
}if ($statuslombancsiswa == 1) {
    $classstatuslombancsiswa = 'disabled';
}if ($statuslombancmahasiswa == 1) {
    $classstatuslombancmahasiswa = 'disabled';
}if ($statuslombadgsiswa == 1){
    $classstatuslombadgsiswa = 'disabled';
}if ($statuslombadgumum == 1) {
    $classstatuslombadgumum = 'disabled';
}


@endphp
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #202240; color: white;">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="d-inline">Daftar Lomba</h4>
                            </div>
                            <div class="col-6 text-right">
                                <form action="{{route('member_lomba_gabung_post')}}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input name="kodeundangan" type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="Masukkan Kode Undangan">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary" type="button">Gabung</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if(session()->has('success'))
                            <div class="col-md-12 mx-auto">
                                <div class="alert alert-success" role="alert">
                                    <p class="text-center">{{ session()->get('success') }}</p>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                            @endif
                            @if(session()->has('error'))
                            <div class="col-md-12 mx-auto">
                                <div class="alert alert-danger" role="alert">
                                    <p class="text-center">{{ session()->get('error') }}</p>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                            @endif

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">UI UX Competition</h4>
                                        <p>Orientasi kepada kenyaamanan dan pengalaman pengguna dengan tujuan untuk
                                            membuat interaksi pengguna</p>
                                        <a href="{{route('member_lomba_buat', 1)}}"
                                            class="btn btn-primary btn-block {{$class}}">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">Network Competition</h4>
                                        <p>Memecahkan masalah serta melalukan analisis mengenai jaringan komputer dengan
                                            menggunakan aplikasi cisco packet tracert</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modalNC">
                                            Daftar Sekarang
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="modalNC" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Network Competition</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="text-center">Siswa</h4>
                                                    <a href="{{route('member_lomba_buat', 2)}}"
                                                        class="btn btn-primary btn-block {{$classstatuslombancsiswa}}">Daftar</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="text-center">Mahasiswa</h4>
                                                    <a href="{{route('member_lomba_buat', 3)}}"
                                                        class="btn btn-primary btn-block {{$classstatuslombancmahasiswa}}">Daftar</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modalDG" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Desain Grafis</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="text-center">Siswa</h4>
                                                    <a href="{{route('member_lomba_buat', 6)}}"
                                                        class="btn btn-primary btn-block {{$classstatuslombadgsiswa}}">Daftar</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="text-center">Umum</h4>
                                                    <a href="{{route('member_lomba_buat', 7)}}"
                                                        class="btn btn-primary btn-block {{$classstatuslombadgumum}}">Daftar</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">IOT Competition</h4>
                                        <p>Perkembangan teknologi serta kemajuannya menimbulkan efek yang sangat
                                            berdampak bagi masyarakat sekitar anda</p>
                                        <a href="{{route('member_lomba_buat', 4)}}"
                                            class="btn btn-primary btn-block {{$class}}">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">Competitive Programming</h4>
                                        <p>kemampuan menemukan algoritma dan mengimplementasikan algoritma tersebut
                                            menjadi sebuah program komputer</p>
                                        <a href="{{route('member_lomba_buat', 5)}}"
                                            class="btn btn-primary btn-block {{$class}}">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">Desain Grafis</h4>
                                        <p>Menciptakan Ilustrasi dan persepsi akan suatu pesan yang disampaikan melalui
                                            media poster dengan visualisasi yang semenarik mungkin yang baik</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modalDG">
                                            Daftar Sekarang
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">Line Followers</h4>
                                        <p>Robot yang bergerak mengikuti jalur panduan garis yang telah ditentukan
                                            menggunakan bahan khusus agar robot dapat melintas di arenanya</p>
                                        <a href="{{route('member_lomba_buat', 8)}}"
                                            class="btn btn-primary btn-block {{$class}}">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">Lomba Karya Tulis Ilmiah</h4>
                                        <p>Gagasan dan ide dalam karya tulis dapat memicu hal - hal yang berbau kreatif,
                                            inovatif hingga visioner dikemudian hari. </p>
                                        <a href="{{route('member_lomba_buat', 9)}}"
                                            class="btn btn-primary btn-block {{$class}}">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-left">
                                    <div class="card-body">
                                        <h4 class="lead font-weight-bold text-center">Sinematografi</h4>
                                        <p>Made great fish shall beast, fourth land also Doesn tree without lesser
                                            likeness he fruit of called gathering day whose called were have called were
                                            have waht</p>
                                        <a href="{{route('member_lomba_buat', 10)}}"
                                            class="btn btn-primary btn-block {{$class}}">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center text-muted">
            All Rights Reserved by KABAMAFIKOMUMI
        </footer>
    </div>
    @endsection

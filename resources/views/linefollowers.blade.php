@extends('layouts.app')
@section('content')
    <!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Line Followers</h2>
                                                <a href="{{route('register')}}" class="btn_2">Daftar Sekarang</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::about_us part start::-->
<section class="about_us section_padding element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>Deskripsi Lomba</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <h2>Line Followrs</h2>
                    <p style="text-align: justify">Line Followers Competition merupakan suatu Kompetisi Robotik tingkat SMA/SMK Sederajat
                        yang dilaksanakan oleh Kampoeng IT 5. Kompetisi Robotik Line Follower Robot
                        Competition mengacu pada format pertandingan robot line follower pada umumnya</p>
                    <a href="#" class="btn_2">learn more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="learning_img">
                    <img src="{{asset('public/landing_page/img/about_img.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_4.png')}}" alt="" class="feature_icon_1 custom-animation1">
</section>
<!--::about_us part end::-->

<!--::about_us part start::-->
<section class="about_us section_padding element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>Rulebook</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <h2>Informasi Lomba</h2>
                    <a href="{{asset('public/rulebook/Rule Book - Siswa Line Followers With Template_compressed.pdf')}}" class="btn_2">Download Rulebook</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="learning_img">
                    <div style="text-align: justify">
                        <p>Seluruh peserta diwajibkan membaca rulebook sebelum melakukan pendafataran</p>
                        <br>
                        <p>Peserta mendaftarkan timnya pada laman pendaftaran yang telah disediakan</p>
                        <br>
                        <p>Bila tim sudah menyelesaikan proses pembayaran dan pendaftaran setiap tim harus mengirimkan
                            proposal pada laman perlombaan, bisa diakses melalui laman user </p>
                        <br>
                        <p>Tim yang lolos penyeleksian tahap awal akan dikonfirmasi pada laman email dan diharapkan
                            mengikuti arahan dari Tim penyeleksi masing - masing perlombaan </p>
                        <br>
                        <p>Babak pertandingan akan diadakan di Fakultas Ilmu Komputer Universitas Muslim Indonesia</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_4.png')}}" alt="" class="feature_icon_1 custom-animation1">
</section>
<!--::about_us part end::-->

<!--::accordion part start::-->
<section class="accordion_part padding_bottom element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>Timeline Kegiatan & FAQ</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="about_us_text">
                    <table class="table" border="1">
                        <thead style="background-color: #202240; color: white;">
                            <tr>
                                <th>Timeline</th>
                                <th>Jadwal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pendaftaraan Online</td>
                                <td>20 Februari 2020 - 14 Maret 2020</td>
                            </tr>
                            <tr>
                                <td>Tahap 1 : Pengiriman Video Demo Robot</td>
                                <td>20 Februari 2020 - 14 Maret 2020</td>
                            </tr>
                            <tr>
                                <td>Pengumuman Finalis</td>
                                <td>16 April 2020</td>
                            </tr>
                            <tr>
                                <td>Babak Pertandingan</td>
                                <td>17 April 2020</td>
                            </tr>
                            <tr>
                                <td>Pengumuman 3 Finalis Terbaik</td>
                                <td>18 April 2020</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    apakah peserta harus satu universitas yang sama ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Peserta dalam sebuah tim tidak harus dari satu universitas yang sama, bisa dari
                                universitas lain selagi masih bisa menunjukan kartu aktif sebagai mahasiswa.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    bagaimana cara konfirmasi pembayaran ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Untuk konfirmasi pembayaran silahkan melalui website atau hubungi kontak dari lomba yang
                                berkaitan dan sertakan bukti pembayaran
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana bila bukti pembayaran tidak ada ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Jika bukti pembayaran tidak ada, segera hubungi panitian dan berikan informasi pengirim
                                dan tanggal beserta waktu transaksi yang dilakukan
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading_4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                    Apakah bisa mengikuti lebih dari satu perlombaan ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                            <div class="card-body">
                                Tentu saja, dengan syarat kamu hanya bisa menjadi ketua dalam satu perlombaan yang
                                berkaitan
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading_4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                    Bagaimana bila informasi yang saya dapatkan kurang jelas ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_5" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                            <div class="card-body">
                                Jika informasi yang saya dapatkan informasi belum jelas, silahkan selalu hubungi panitia
                                melalui whatsapp yang sudah tertera dalam rule book masing - masing perlombaan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::accordion part end::-->
@endsection
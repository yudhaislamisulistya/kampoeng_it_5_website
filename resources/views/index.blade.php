@extends('layouts.app')

@section('content')
<!--::banner part start::-->
<section class="element-animate">
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 bounceIn">
                    <div class="banner_img d-none d-lg-block">
                        <img class="" src="{{asset('public/landing_page/img/banner_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Kampoeng IT 5 2020</h1>
                            <p>"Zone Affected by Century"</p>
                            <a href="{{route('register')}}" class="btn_2">Gabung di Kompetisi Ini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_7.png')}}" alt=""
            class="feature_icon_1 custom-animation1">
        <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_8.png')}}" alt=""
            class="feature_icon_2 custom-animation2">
        <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_1.png')}}" alt=""
            class="feature_icon_3 custom-animation3">
        <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_2.png')}}" alt=""
            class="feature_icon_4 custom-animation4">
        <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_3.png')}}" alt=""
            class="feature_icon_5 custom-animation5">
        <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_4.png')}}" alt=""
            class="feature_icon_6 custom-animation6">
    </section>
</section>
<!--::banner part start::-->

<!--::use sasu part end::-->
<section class="use_sasu padding_top element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>KAMPOENG IT KOMPETISI</h2>
                    <p>Daftar Kompetisi Yang Diperlombakan Event Kampoeng IT 5 2020 Mulai Dari Jenjang SMA/K
                        Sederajat Hingga Jenjang Universitas</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>UI UX Competition</h4>
                        <p>Orientasi kepada kenyaamanan dan pengalaman pengguna dengan tujuan untuk membuat
                            interaksi pengguna se-sedarhana dan se-efisien mungkin.</p>
                        <a href="{{route('uiuxcompetition')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>Network Competition</h4>
                        <p>Memecahkan masalah serta melalukan analisis mengenai jaringan komputer dengan menggunakan
                            aplikasi cisco packet tracert</p>
                        <a href="{{route('networkcompetition')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>IOT Competition</h4>
                        <p>Perkembangan teknologi serta kemajuannya menimbulkan efek yang sangat berdampak bagi
                            masyarakat sekitar</p>
                        <a href="{{route('iotcompetition')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>Competitive Programming</h4>
                        <p>kemampuan menemukan algoritma dan mengimplementasikan algoritma
                            tersebut menjadi sebuah program komputer</p>
                        <a href="{{route('competitiveprogramming')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>Desain Grafis</h4>
                        <p>Menciptakan Ilustrasi dan persepsi akan suatu pesan yang disampaikan melalui media poster
                            dengan visualisasi yang semenarik mungkin
                        </p>
                        <a href="{{route('desaingrafis')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>Line Followers</h4>
                        <p>Robot yang bergerak mengikuti jalur panduan garis yang telah ditentukan menggunakan bahan
                            khusus agar robot dapat melintas di arenanya</p>
                        <a href="{{route('linefollowers')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>Lomba Karya Tulis Ilmiah</h4>
                        <p>Gagasan dan ide dalam karya tulis dapat memicu hal - hal yang berbau kreatif, inovatif
                            hingga
                            visioner dikemudian hari. </p>
                        <a href="{{route('lkti')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4" style="padding-bottom: 50px;">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{asset('public/landing_page/img/icon/feature_icon_3.png')}}" alt="">
                        <h4>Sinematografi</h4>
                        <p>Made great fish shall beast, fourth land also Doesn tree without
                            lesser likeness he fruit of called gathering day whose called were have
                        </p>
                        <a href="{{route('sinematografi')}}" class="btn_2">Info Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('public/landing_page/img/animate_icon/Ellipse_1.png')}}" alt="" class="feature_icon_1 custom-animation1">
</section>
<!--::use sasu part end::-->

<!--::about_us part start::-->
<section class="about_us section_padding element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>TENTANG KAMPOENG IT</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <p class="text-justify">KAMPOENG IT merupakan kegiatan besar dan menjadi program kerja dari bidang minat dan bakat BEM
                        FIKOM UMI yang dirangkaikan dengan milad KABAMAFIKOM UMI. Dimana kegiatan ini telah dilaksankan
                        4 kali dan di tahun 2020 ini merupakan kali kelima kegiatan ini diadakan. KAMPOENG IT V
                        mengangkat tema “Zona Effected by Century” yaitu kawasan yang dipengaruhi oleh zaman. Dengan
                        mengangkat tema tentang teknologi dan peradaban, diharapkan adanya pengetahuan baru dalam
                        masyarakat umum, khusunya mahasiswa dalam penggunaan dan pemanfaatan teknologi yang seharusnya
                        dapat dimanfaatkan secara positif di segala lini kehidupan, terkhusus bagi masyarakat kelas
                        menengah kebawah dalam rangka meningkatkan daya saing sumber daya manusia (SDM) dalam menghadapi
                        perkembangan teknologi yang begitu cepat. Dalam upaya peningkatan daya saing sumber daya manusia
                        (SDM), khususnya mahasiswa di lingkup fakultas ilmu komputer tidak bisa hanya mengandalkan ilmu
                        yang diperoleh dari lingkup akademik. Tetapi, juga harus menggali dan menguasai teknologi dari
                        berbagai sumber untuk meningkatkan pengetahuan, kreatifitas, daya inisiatif, dan jiwa-jiwa
                        intrepreneur yang cerdas dan ulet. Sebab, teknologi itu kunci. Jika seseorang tidak menguasasi
                        teknologi, maka ia akan ditinggalkan.
                        Kampoeng IT V hadir untuk menambah wawasan tentang perkembangan teknologi serta karya-karya
                        mahasiswa dapat dikenal dan memberi pengetahuan baru. Kampoeng IT juga hadir sebagai wadah untuk
                        menyalurkan hasil kreatifitas masyarakat dibidang ilmu teknologi informasi. </p>
                    <a href="{{route('sejarah')}}" class="btn_2">Sejarah Kampoeng IT</a>
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

<!--::client logo part end::-->
<section class="client_logo element-animate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <h2>PARTNER KAMI</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                {{-- <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                    <div class="single_client_logo">
                        <img src="{{asset('public/landing_page/img/client_logo/client_logo_1.png')}}" alt="">
            </div>
            <div class="single_client_logo">
                <img src="{{asset('public/landing_page/img/client_logo/client_logo_2.png')}}" alt="">
            </div>
            <div class="single_client_logo">
                <img src="{{asset('public/landing_page/img/client_logo/client_logo_3.png')}}" alt="">
            </div>
            <div class="single_client_logo">
                <img src="{{asset('public/landing_page/img/client_logo/client_logo_4.png')}}" alt="">
            </div>
            <div class="single_client_logo">
                <img src="{{asset('public/landing_page/img/client_logo/client_logo_5.png')}}" alt="">
            </div>
            <div class="single_client_logo">
                <img src="{{asset('public/landing_page/img/client_logo/client_logo_1.png')}}" alt="">
            </div>
            <div class="single_client_logo">
                <img src="{{asset('public/landing_page/img/client_logo/client_logo_2.png')}}" alt="">
            </div>
        </div> --}}
    </div>
    </div>
    </div>
</section>
<!--::client logo part end::-->

@endsection

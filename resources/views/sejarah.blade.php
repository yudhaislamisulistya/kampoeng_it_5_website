@extends('layouts.app')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Sejarah Kampoeng IT</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!-- Start Sample Area -->
<section class="sample-text-area element-animate">
    <div class="container box_1170">
        <h3 class="text-heading">Sejarah Kampoeng IT</h3>
        <p class="sample-text">
            KAMPOENG IT merupakan kegiatan besar dan menjadi program kerja dari bidang minat dan bakat BEM
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
            menyalurkan hasil kreatifitas masyarakat dibidang ilmu teknologi informasi.
        </p>
    </div>
</section>
<!-- End Sample Area -->
<!-- Start Align Area -->
<section class="element-animate">
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3>Dokumentasi Kegiatan</h3>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="{{asset('public/landing_page/img/elements/1.png')}}" class="img-pop-up img-gal gallery_img">
                            <div class="single-gallery-image" style="background: url(landing_page/img/elements/1.png);">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{asset('public/landing_page/img/elements/2.png')}}" class="img-pop-up img-gal gallery_img">
                            <div class="single-gallery-image" style="background: url(landing_page/img/elements/2.png);">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{asset('public/landing_page/img/elements/3.png')}}" class="img-pop-up img-gal gallery_img">
                            <div class="single-gallery-image" style="background: url(landing_page/img/elements/3.png);">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Align Area -->

@endsection

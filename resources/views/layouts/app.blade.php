<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kampoeng IT 5 2020</title>
    <link rel="icon" href="{{asset('public/landing_page/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('public/landing_page/css/animate.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('public/landing_page/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/landing_page/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/animate.css')}}">
    <style>
        .element-animate {
            opacity: 0;
            visibility: hidden;
        }

    </style>
</head>

<body>
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="index.html"> <img
                                src="{{asset('public/landing_page/img/logo.png')}}" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="{{route('index')}}"> <img
                                src="{{asset('public/landing_page/img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('index')}}">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kompetisi
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('uiuxcompetition')}}">UI/UX
                                            Competition</a>
                                        <a class="dropdown-item" href="{{route('networkcompetition')}}">Network
                                            Competition</a>
                                        <a class="dropdown-item" href="{{route('iotcompetition')}}">IOT Competition</a>
                                        <a class="dropdown-item" href="{{route('competitiveprogramming')}}">Competitive
                                            Programming</a>
                                        <a class="dropdown-item" href="{{route('desaingrafis')}}">Desain Grafis</a>
                                        <a class="dropdown-item" href="{{route('linefollowers')}}">Line Followers</a>
                                        <a class="dropdown-item" href="{{route('lkti')}}">Lomba Karya Tulis Ilmiah</a>
                                        <a class="dropdown-item" href="{{route('sinematografi')}}">Sinematografi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('informasi')}}">Informasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('pedoman')}}">Pedoman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('sejarah')}}">Sejarah</a>
                                </li>
                            </ul>
                        </div>
                        <a href="{{route('register')}}" class="d-none d-sm-block btn_2 home_page_btn">Daftar</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    @yield('content')

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <a href="index.html" class="footer_logo_iner"> <img src="{{asset('public/landing_page/img/logo.png')}}"
                                alt="#"></a>
                        <p style="text-align: justify;">Kampoeng IT adalah sebuah ajang perlombaan tingkat nasional yang
                            diselenggarakan oleh
                            Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Universitas Muslim Indonesia. Pada tahun
                            ini Kampoeng IT kembali diadakan dengan mengusung tema "Zona Affected by Century".</p>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <h4 class="single_footer_part">Universitas Muslim Indonesia</h4>
                        <p>Fakultas Ilmu Komputer, Sekretariat BEM/BLM FIKOM UMI
                            Jl. Urip Sumoharjo No.5, Panaikang, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231
                        </p>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <h4 class="single_footer_part">Media Sosial</h4>
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="http://instagram.com/kampoengit" class="single_social_icon"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | KABAMAFIKOM UMI
                        </P>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('public/landing_page/js/jquery-1.12.1.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/popper.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('public/landing_page/js/swiper.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/masonry.pkgd.js')}}"></script>
    <script src="{{asset('public/landing_page/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/slick.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/waypoints.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/contact.js')}}"></script>
    <script src="{{asset('public/landing_page/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/jquery.form.js')}}"></script>
    <script src="{{asset('public/landing_page/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/mail-script.js')}}"></script>
    <script src="{{asset('public/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/landing_page/js/custom.js')}}"></script>
    <script>
        $(document).ready(function () {

            var contentWayPoint = function() {
		var i = 0;
		$('.element-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('element-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .element-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn element-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft element-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight element-animated');
							} else {
								el.addClass('fadeInLeft element-animated');
							}
							el.removeClass('item-animate');
						},  k * 100);
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();
        });

    </script>
</body>

</html>

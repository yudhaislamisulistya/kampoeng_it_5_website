@extends('layouts.app')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Detail Artikel</h2>
                        <h5>{{$data->title}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img width="100%" class="img-fluid" src="{{asset('public/file_post')}}/{{$data->file}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{$data->title}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><i class="far fa-clock"></i>{{$data->created_at}}</li>
                        </ul>
                        <?= $data->content ?>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <ul class="social-icons">
                            <li><a href="https://instagram.com/kampoengit"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="{{asset('public/landing_page/img/blog/author.png')}}" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Admin</h4>
                            </a>
                            <p>Admin Kampoeng IT 5 2020</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Informasi Terbaru</h3>
                        @foreach ($informasiterbaru as $it)
                        <div class="media post_item">
                            <img height="100px" width="100px" src="{{asset('public/file_post')}}/{{$it->file}}" alt="post"
                                class="rounded">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>{{$it->title}}</h3>
                                </a>
                                <p>{{$it->created_at}}</p>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('public/landing_page/img/post/post_5.png')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area end =================-->
@endsection

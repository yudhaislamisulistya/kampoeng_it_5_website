@extends('layouts.app')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Informasi Kampoeng IT5</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Blog Area =================-->
<section class="accordion_part section_padding element-animate">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($informasi as $i)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img height="400px" class="card-img rounded" src="{{asset('public/file_post/')}}/{{$i->file}}"
                                alt="">
                            <a href="#" class="blog_item_date">
                                <h3>{{substr($i->created_at, 0, 4)}}</h3>
                                <p>{{substr($i->created_at, 5, 6)}}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{route('detail_informasi', $i->id)}}">
                                <h2>{{$i->title}}</h2>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Informasi Terbaru</h3>
                        @foreach ($informasiterbaru as $it)
                        <div class="media post_item">
                            <img height="100px" width="100px" src="{{asset('public/file_post')}}/{{$it->file}}" alt="post" class="rounded">
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
<!--================Blog Area =================-->
@endsection

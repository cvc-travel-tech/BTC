@extends('Frontend.main')

@section('content')



    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_1">
            <div class="container">
                <h2><span></span> </h2>
                <ul>
                    <li><a href="#inner-page-title">Home</a> </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">Blog Posts</a> </li>
                </ul>
                <p></p>
            </div>
        </div>
    </section>
    <!--====== ALL POST ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title col-md-12">
                    <h2>Holiday Tour <span>Blog</span> Posts</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <!--===== POSTS ======-->
                <div class="rows">


@foreach($blogs as $blog) 

                    <div class="posts">
                        <div class="col-md-6 col-sm-6 col-xs-12"> <img src="{{ asset('frontend/images/hatshepsuttemple.jpg') }}" />
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>{{ $blog->title }}</h3>
                            <h5><span class="post_author">Author: Johnson</span><span class="post_date">Date: 12th
                                    May,2016</span><span class="post_city">City: Illunois</span></h5>
                            <p>{!! $blog->description !!}</p>
                            <a href="blog-inner.html" class="link-btn">Read more</a>
                        </div>
                    </div>
@endforeach


           
          
                </div>
                <!--===== POST END ======-->
            </div>
        </div>
    </section>
    <!--====== TIPS BEFORE TRAVEL ==========-->

@endsection
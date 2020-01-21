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




                    <div class="posts">
                        <div class="col-md-6 col-sm-6 col-xs-12"> <img src="{{ asset('frontend/images/hatshepsuttemple.jpg') }}" />
                        </div>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>Solar Alignment on Hatshepsut's Temple</h3>
                            <h5><span class="post_author">Author: Johnson</span><span class="post_date">Date: 12th
                                    May,2016</span><span class="post_city">City: Illunois</span></h5>
                            <p>On the 6th of January 2020, a lot of people gathered in front of Queen Hatshepsut's temple ,at El Dier Elbahary in Luxor's west bank, to witness the sun aligning on the sanctuary of the temple. This fascinating phenomenon indicates
                                the intelligence of Ancient Egyptians architectural and astronomical knowledge. It can help us deeply understand their beliefs; in addition it is an excellent example of the environmental-friendly constructions depending
                                on its aligning with sun rays. Furthermore, the event contributes in reviving tourism in the area and educating crowds of people about the glorious ancient civilization. It is understood that Ancient Egyptians celebrated
                                two major festivals every year; the first of goddess Hathour, goddess of motherhood and love, on the 6th of January. The second is god Horus's, the sky god, on the 9th of December. This is why Ancient Egyptians architects
                                aligned most of their temples and shrines to line up with such important religious occasions. Worthwhile, the funerary temple of Queen Hatshepsut is considered one of the most beautiful buildings in Egypt. It owns a dramatic
                                location where the temple is beautifully blended with the cliffs from which it was partially cut. It was designed by the courtier Senenmut who is said to be Hatshepsut's lover as well.
                            </p>
                            <a href="blog-inner.html" class="link-btn">Read more</a>
                        </div>
                    </div>




           
          
                </div>
                <!--===== POST END ======-->
            </div>
        </div>
    </section>
    <!--====== TIPS BEFORE TRAVEL ==========-->

@endsection
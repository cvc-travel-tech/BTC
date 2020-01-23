@extends('Frontend.main')

@section('content')
<body>
    <!-- Preloader -->

    <!--====== BANNER ==========-->
    <section>
        <div class="rows inner_banner inner_banner_4">
            <div class="container">
                <!-- <h2><span>Brazil & Argentina -</span> Family Package</h2> -->
                <ul>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a href="#inner-page-title" class="bread-acti">6 Day Cairo Tour</a>
                    </li>
                </ul>
                <p>Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS - BOOKING ==========-->
    <section>
        <div class="rows banner_book" id="inner-page-title">
            <div class="container">
                <div class="banner_book_1">
                    <ul>
                        <li class="dl1">Location :Egypt</li>
                        <li class="dl2">Price : $500</li>
                        <li class="dl3">Duration : 5 nights Cairo</li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!--====== TOUR DETAILS ==========-->
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <div class="col-md-9">
                    <!--====== TOUR TITLE ==========-->
                    <div class="tour_head">
                        <div class="col-md-8" style="margin-top: -63px">
                            <h2>{{$row->name}}<span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i
                                        class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                        class="fa fa-star-half-o" aria-hidden="true"></i></span>
                                <span class="tour_rat">4.5</span>
                        </div>
                        </h2>

                    </div>
                    <div class="tour_head1 hotel-book-room">

                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators carousel-indicators-1">
                                @foreach ($row->images as $image)

                                <li data-target="#myCarousel1" data-slide-to="{{$loop->index}}"><img src="{{getImg($image, 'large')}}"
                                    alt="">
                                </li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner carousel-inner1" role="listbox">
                                @foreach ($row->images as $image)
                                <div class="item @if($loop->first) active @endif"> <img src="{{getImg($image, 'large')}}" alt="">
                                </div>
                                @endforeach
                                
                                <!-- <div class="item"> <img src="images/gallery/t9.jpg" alt="Chania" width="460" height="345"> </div> -->
                            </div>
                            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                                <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                                <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1"
                                        aria-hidden="true"></i></span> </a>
                        </div>
                    </div>
                    <!-- Start tab -->
                    <div class="tab-items">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class=" " id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Itinerary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Trip Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="inclusion-tab" data-toggle="tab" href="#inclusion" role="tab"
                                    aria-controls="inclusion" aria-selected="false">Inclusion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Trip Map</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="dates-tab" data-toggle="tab" href="#dates" role="tab"
                                    aria-controls="dates" aria-selected="false">Dates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Client Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade  active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="overview">
                                <table class="table  table-overview">
                                    <thead>
                                        <tr>
                                            <th scope="col">Cairo</th>
                                            <th scope="col">Alexandria</th>
                                            <th scope="col">Luxor</th>
                                            <th scope="col">Aswan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="content-tour"><a href="#"> the Great Pyramid of Khufu</a> </td>
                                            <td class="content-tour">Alexandria National Museum</td>
                                            <td class="content-tour">Valley of the Kings</td>
                                            <td class="content-tour">The Aswan High Dam</td>
                                        </tr>
                                        <tr>
                                            <td class="content-tour">Great Sphinx </td>
                                            <td class="content-tour">Bibliotheca Alexandrina</td>
                                            <td class="content-tour">Colossi of Memnon</td>
                                            <td class="content-tour">Philae Temple</td>
                                        </tr>
                                        <tr>
                                            <td>Khan El-Khalili </td>
                                            <td>Catacomb of Kom El-Shoqafa </td>
                                            <td>Temple of Queen Hatshepsut</td>
                                            <td>Temple of Edfu</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="content-itenarry">

                            {!! $row->itinerary !!}

                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        

                            <iframe width="450" height="350" ; src="{{ $row->trip_video }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div class="tab-pane fade" id="inclusion" role="tabpanel" aria-labelledby="inclusion-tab">

                            <div class="inclusion">
                                {!! $row->inclusion !!}
                            </div>
                        </div>
                        <!-- start table date -->

                        <div class="tab-pane fade" id="dates" role="tabpanel" aria-labelledby="dates-tab">
                            <div class="dates">
                                <div class="container">
                                    <div class="col-sm-4">

                                        <h4>2020 Dates & price Dimond</h4>
                                        <div style="overflow-x:auto;">
                                            <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> </td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> </td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> </td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">

                                        <h4>2020 Dates & price Gold</h4>
                                        <div style="overflow-x:auto;">
                                            <table class="table table-striped table-condensed dates-tabel">
                                                <thead>

                                                    <tr>
                                                        <th>Dates</th>
                                                        <th>Land Only</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a> <span> (Sold Out)</span></td>
                                                        <td>$2289*</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                    <tr>
                                                        <td><a href="#"> Jan 25</a></td>
                                                        <td>$2000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whitepaper">
                            <p><a href="Croconile 6 Day Cairo Tour.pdf" download="download">Download our white
                                    paper</a></p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                    </div>


                    <div>
                        <div class="dir-rat">
                            <div class="dir-rat-inn dir-rat-title">
                                <h3>Write Your Rating Here</h3>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing hidden in the middle of text</p>
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
                            <div class="dir-rat-inn">
                                <form class="dir-rat-form">
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="text" class="form-control" id="email11" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="number" class="form-control" id="email12"
                                            placeholder="Enter Mobile"> </div>
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="email" class="form-control" id="email13"
                                            placeholder="Enter Email id"> </div>
                                    <div class="form-group col-md-6 pad-left-o">
                                        <input type="text" class="form-control" id="email14"
                                            placeholder="Enter your City"> </div>
                                    <div class="form-group col-md-12 pad-left-o">
                                        <textarea placeholder="Write your message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 pad-left-o">
                                        <input type="submit" value="SUBMIT" class="link-btn"> </div>
                                </form>
                            </div>
                            <!--COMMENT RATING-->

                        </div>
                    </div>
                </div>
                <div class="col-md-3 tour_r">

                </div>
                <!--====== SPECIAL OFFERS ==========-->
                <!-- <div class="tour_right tour_offer">
						<div class="band1"><img src="images/offer.png" alt="" /> </div>
						<p>Special Offer</p>
						<h4>$500<span class="n-td">
								<span class="n-td-1">$800</span>
								</span>
							</h4> <a href="booking.html" class="link-btn">Book Now</a> </div> -->
                <!--====== TRIP INFORMATION ==========-->
                <div class="example">
                    <button id="b1">Book Now</button>

                </div>

                <div class="tour_right tour_incl tour-ri-com" style="margin-top:93px">



                    <h3>Trip Information</h3>
                    <ul>
                        <li>Location : Egypt</li>

                        <li> Sightseeing & Hotel</li>
                    </ul>
                </div>
                <!--====== PACKAGE SHARE ==========-->
                <div class="tour_right head_right tour_social tour-ri-com">
                    <h3>Share This Package</h3>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
                <!--====== HELP PACKAGE ==========-->
                <div class="tour_right head_right tour_help tour-ri-com">
                    <h3>Help & Support</h3>
                    <div class="tour_help_1">
                        <h4 class="tour_help_1_call">Call Us Now</h4>
                        <h4><i class="fa fa-phone" aria-hidden="true"></i> 22682428</h4>
                    </div>
                </div>
                <!--====== PUPULAR TOUR PACKAGES ==========-->
                <div class="tour_right tour_rela tour-ri-com">
                    <h3>Popular Packages</h3>
                    <div class="tour_rela_1"> <img src="images/crusie.jpg" alt="" />
                        <h4>6 Night/7 Days</h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model text</p>

                        </p> <a href="family-package.html" class="link-btn">View All package</a>
                    </div>
                    <div class="tour_rela_1"> <img src="images/Great-Sphinx-pyramid-background-Khafre-Giza-Egypt.jpg"
                            alt="" />
                        <h4>9 Night/10 Days</h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model text</p> <a href="#" class="link-btn">View All Package</a>
                    </div>
                    <div class="tour_rela_1"> <img src="images/kom ombo.jpg" alt="" />
                        <h4>11 Night/12 Days</h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model text</p> <a href="#" class="link-btn">View All Package</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--====== TIPS BEFORE TRAVEL ==========-->
    <section>
        <div class="foot-mob-sec tb-space">
            <div class="rows container">
                <!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
                <div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="images/mailbox-07.png" alt="" /> </div>
                <!-- REQUEST A QUOTE -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- THANK YOU MESSAGE -->
                    <div class="foot-mob-app">
                        <h2>Have you tried our mobile app?</h2>
                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel
                            packages and enjoy your holidays with distinctive experience</p>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><strong> Download our Mobile Application &
                                    Get 10% Discount </strong> </li>

                            <li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and Reviews
                            </li>
                        </ul>
                        <a href="#"><img src="images/android.png" alt=""> </a>
                        <a href="#"><img src="images/apple.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->

    <!--====== FOOTER 2 ==========-->
    @endsection
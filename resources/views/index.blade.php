
@extends('Frontend.main')

@section('content')
<body>
    <!-- Preloader -->
  



    <section>
        <div class="tourz-search" style="    background: url({{ asset('frontend/images/egypt.jpg')}}) no-repeat;
    position: relative;
    background-size: cover;">

            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">

                        <h1><span>Explore</span> <span id="type-text"></span> </h1>
                        <p>Experience our exclusive vacation packages, ensure affordable deals, book your accommodation, discover top events and more…</p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--END HEADER SECTION-->

    <section>

        <div class=" tourz-hom-ser">

            <ul>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/secure-shield.png')}}" alt="">
                        <p>Free Cancellation</p>
                    </a>
                </li>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/dollar-symbol.svg')}}" alt="">
                        <p>Best Price Guaranteed</p>
                    </a>
                </li>

                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/support.svg')}}" alt="">
                        <p>Tour Guide System</p>
                    </a>
                </li>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/airplane.svg')}}" alt="">
                        <p>Guaranteed Departure</p>
                    </a>
                </li>
            </ul>



        </div>


        <div class=" tourz-hom-ser">
            <ul>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/secure-shield.png')}}" alt="">
                        <p>Free Cancellation</p>
                    </a>
                </li>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/dollar-symbol.svg')}}" alt="">
                        <p>Best Price Guaranteed</p>
                    </a>
                </li>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/support.svg')}}" alt="">
                        <p>Tour Guide System</p>
                    </a>
                </li>
                <li>
                    <a href="#"> <img src="{{ asset('frontend/images/airplane.svg')}}" alt="">
                        <p>Guaranteed Departure</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="Khartosha text-center">
            <div class="container">
                <a href="input.html">

                    <div class="spe-title">
                        <h2>Write <span>Your Name in Hieroglyphic</span></h2>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p>Croconile Travel offers many packages and customized tours. Visit Egypt's must see touristic attractions and make sure your vacation is flawless</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section>
        <div class=" rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title content-pack">
                    <h2>Top <span> Private Egypt Tour Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Croconile Travel offers many packages and customized tours. Visit Egypt's must see touristic attractions and make sure your vacation is flawless</p>
                </div>
                <!-- TOUR PLACE 1 -->
                <div class="col-md-12 text-center">
                    <div class="col-md-12">
                        <div class="package-table text-center">
                            <table class="table table-striped table-bordered table-hover" style="
                                    width: 70%;
                                    margin: 0 auto;
                                ">
                                <thead>
                                    <tr>
                                        <th width="8%">Price</th>
                                        <th width="35%">Title</th>
                                        <th width="33%" class="itenary">Itenery</th>
                                        <th width="12%">To</th>
                                        <th width="12%">From</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </th>
                                        <th>
                                            <a href="tour-details.html">
                                                <h5>7 Day Standard Egypt Tour</h5>
                                            </a>
                                            <!-- <p class="package-content">Round trip airfare from NYC, 6 nights accommodation, all transfers, most meals and sightseeing</p> -->

                                        </th>

                                        <td class="package-content" style=" padding-top: 18px;">3 nights Cairo & 3 nights Nile Cruise</td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size:12px;">
                                                100$</h4>
                                            <td>
                                                <a href="tour-details.html">
                                                    <h5>9 Day In Depth Egypt Tour </h5>
                                                </a>
                                            </td>
                                            <td class="package-content" style=" padding-top: 18px;">4 nights Cairo & 4 nights Nile Cruise
                                            </td>
                                            <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                            <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </td>
                                        <td>
                                            <a href="tour-details.html">
                                                <h5>9 Day Economical Egypt Tour</h5>
                                            </a>

                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">
                                            3 nights Cairo & 3 nights Nile Cruise
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </td>
                                        <td>
                                            <a href="tour-details.html">
                                                <h5>9 Day Standard with Red Sea Egypt</h5>
                                            </a>
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">2 nights Cairo & 3 night Luxor
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </td>
                                        <td>
                                            <a href="tour-details.html">
                                                <h5>11 Day Egypt All Egypt Tour</h5>
                                            </a>

                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">5 nights Cairo & 1 nights luxor
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </td>
                                        <td>
                                            <a href="tour-details.html">
                                                <h5>11 Day Egypt Complete Tour</h5>
                                            </a>
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">6 nights Cairo & 4 nights Nile Cruise</td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>

                                    </tr>

                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </td>
                                        <td>
                                            <a href="tour-details.html">
                                                <h5>11 Day Inclusive Egypt Tour</h5>
                                            </a>

                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">6 nights Cairo & 3 nights Nile Cruise
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="package-content" style="text-align: center;  padding-top: 0px; font-size: 12px;">
                                                100$</h4>
                                        </td>
                                        <td>
                                            <a href="tour-details.html">
                                                <h5>14 Day Egypt Grand Tour</h5>
                                            </a>
                                        </td>
                                        <td class="package-content" style=" padding-top: 18px;">6 nights Cairo & 7 nights Nile Cruise</td>
                                        <td class="package-content" style=" padding-top: 18px;">Jan 2020</td>
                                        <td class="package-content" style=" padding-top: 18px;">Dec 2020</td>
                                    </tr>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>

                            <!-- <button > -->
                            <!-- <a class=" btn btn-default see-more text-center " href="all-package.html "> SEE MORE </a> -->
                            <!-- </button> -->

                            <!-- <div class="text-center ">
                            <a href="family-package.html " class="link-btn center-block ">SEE MORE</a>
                        </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- <button > -->
            <!-- <a class="btn btn-default  see-more text-center" href="all-package.html"> SEE MORE </a> -->
            <!-- </button> -->

            <!-- <div class="text-center">
                        <a href="family-package.html" class="link-btn center-block">SEE MORE</a>
                    </div> -->

        </div>
    </section>
    <!--====== HOME HOTELS ==========-->

    <!--====== SECTION: FREE CONSULTANT ==========-->
    <section>
        <div class=" offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== TIPS BEFORE TRAVEL ==========-->
    <section>
        <div class=" foot-mob-sec tb-space">
            <div class="rows container">
                <!-- FAMILY IMAGE(YOU CAN USE ANY PNG')}} IMAGE) -->
                <div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="{{ asset('frontend/images/mailbox-07.png')}}" alt="" /> </div>
                <!-- REQUEST A QUOTE -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- THANK YOU MESSAGE -->
                    <div class="foot-mob-app">
                        <h3>Have you tried our mobile app?</h3>
                        <p>Download our mobile app NOW and get exclusive offers. Easily manage your booking, hotel & flight reservation tickets. Read customer's reviews and see real pictures & videos of your destination.
                        </p>
                        <ul>

                            <li><i class="fa fa-check" aria-hidden="true"></i><strong> Download our Mobile Application &
                                    Get 10% Discount </strong> </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>See our top deals</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Easy booking on your phone</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> No credit card needed</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Save your time and receive support 24/7
                            </li>
                        </ul>
                        <a href="#"><img src="{{ asset('frontend/images/android.png')}}" alt=""> </a>
                        <a href="#"><img src="{{ asset('frontend/images/apple.png')}}" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->

    <!--====== FOOTER 2 ==========-->
    @endsection
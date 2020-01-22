@extends('Frontend.main')

@section('content')
<body>
    <!-- Preloader -->

    <!--DASHBOARD-->
    <section>
        <div class="tr-register">
            <div class="tr-regi-form">
                <h4>Login</h4>
                <p>It's free and always will be.</p>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" placeholder="ID" class="validate">

                        </div>
                    </div>

                    <center>
                        <div class="submit">
                            <div class="input-field col s6 ">
                                <input type="submit" value="submit" class="waves-effect waves-light btn-large"> </div>
                        </div>

                    </center>

                </form>

                <div class="soc-login">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
                        <li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
                        <li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
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
                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
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
    @endsection

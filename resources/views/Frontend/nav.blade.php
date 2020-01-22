  <div id="preloader">
        <img src="{{ asset('frontend/images/mailbox-09.png')}}" alt="">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="{{setting('site', 'logo' , 'img')}}" height="50px" alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Home </h4>
                            <ul>
                                <li><a href="{{ url('/') }}" class="active">Home</a>
                                </li>
                                <li><a href="{{ url('about') }}">About us</a> </li>
                                <li><a href="{{ url('family-package') }}">Packages</a> </li>
                                <li><a href="{{ url('contact') }}">Contact us</a> </li>
                                <li><a href="{{ url('travel-free') }}">Travel for Free</a> </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +02 012 21 23 25 04</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="login.html">Login</a>

                                </li>

                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.html"><img src="{{setting('site', 'logo' , 'img')}}" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}" class="active">Home</a>
                                </li>
                                <li><a href="{{ url('about') }}">About us</a> </li>
                                <li><a href="{{ url('family-package') }}">Packages</a> </li>
                                <li><a href="{{ url('contact') }}">Contact us</a> </li>
                                <li><a href="{{ url('travel-free') }}">Travel for Free</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--END HEADER SECTION-->

    <!--HEADER SECTION-->

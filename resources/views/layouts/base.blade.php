<!DOCTYPE html>
<html lang="en">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>@yield('title') | DIRI Manuscript Project</title>
        
        <!-- Favicon -->
        <link href="favicon.ico" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{URL::asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="{{URL::asset('css/mmenu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="{{URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        @yield('head_content')
    </head>
    
    <body>
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index-2.html">
                                                <img src="/img/manuscriptlogoS.png" alt="DIRI Manuscripts" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="mailto:info@diri.ac.nz"><i class="fa fa-envelope"></i>info@diri.ac.nz</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                                @guest
                                                    <a href="{{route('login') }}"><i class="fa fa-lock"></i>Login</a>
                                                @else
                                                    <a href="{{route('logout') }}"><i class="fa fa-lock"></i>Logout</a>
                                                @endguest                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">About the Project</a></li>
                                        <li><a href="{{ route('manuscripts.index')}}">Manuscripts</a></li>
                                        @guest

                                        @else
                                            <li class="dropdown active">
                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Admin</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('voyager.login') }}">Admin Panel</a></li>
                                                    <li><a href="{{ route('manuscripts.create') }}">Create New Manuscript</a></li>
                                                    <li><a href="#">Index of Manuscripts</a></li>
                                                </ul>
                                            </li>
                                        @endguest                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home V1</a></li>
                                            <li><a href="home-v2.html">Home V2</a></li>
                                            <li><a href="home-v3.html">Home V3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="books-media-list-view.html">Books &amp; Media</a>
                                        <ul>
                                            <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                            <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                            <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                            <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                            <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        @yield('header')


                @yield('content')
                
                <!-- Start: Footer -->
                <footer class="site-footer">
                    <div class="container">
                        <div id="footer-widgets">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 widget-container">
                                    <div id="text-2" class="widget widget_text">
                                        <h3 class="footer-widget-title">About DIRI</h3>
                                        <span class="underline left"></span>
                                        <div class="textwidget">
                                            Dhammachai International Research Institute
                                        </div>
                                        <address>
                                            <div class="info">
                                                <i class="fa fa-location-arrow"></i>
                                                <span>399 George Street, Dunedin, Otago, New Zealand</span>
                                            </div>
                                            <div class="info">
                                                <i class="fa fa-envelope"></i>
                                                <span><a href="mailto:support@libraria.com">info@diri.ac.nz</a></span>
                                            </div>
                                            <div class="info">
                                                <i class="fa fa-phone"></i>
                                                <span><a href="tel:64211747612">(+64) 21 174 7612</a></span>
                                            </div>
                                        </address>
                                    </div>
                                </div>
                                {{-- <div class="col-md-2 col-sm-6 widget-container">
                                    <div id="nav_menu-2" class="widget widget_nav_menu">
                                        <h3 class="footer-widget-title">Quick Links</h3>
                                        <span class="underline left"></span>
                                        <div class="menu-quick-links-container">
                                            <ul id="menu-quick-links" class="menu">
                                                <li><a href="#">Library News</a></li>
                                                <li><a href="#">History</a></li>
                                                <li><a href="#">Meet Our Staff</a></li>
                                                <li><a href="#">Board of Trustees</a></li>
                                                <li><a href="#">Budget</a></li>
                                                <li><a href="#">Annual Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                                <div class="col-md-2 col-sm-6 widget-container">
                                    <div id="text-4" class="widget widget_text">
                                        <h3 class="footer-widget-title">Timing</h3>
                                        <span class="underline left"></span>
                                        <div class="timming-text-widget">
                                            <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                            <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                            <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                            <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                            <ul>
                                                <li><a href="#">Closings</a></li>
                                                <li><a href="#">Branches</a></li>
                                            </ul>
                                        </div>
                                    </div>			
                                </div>
                                <div class="col-md-4 col-sm-6 widget-container">
                                    <div class="widget twitter-widget">
                                        <h3 class="footer-widget-title">Latest Tweets</h3>
                                        <span class="underline left"></span>
                                        <div id="twitter-feed">
                                            <ul>
                                                <li>
                                                    <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                                </li>
                                                <li>
                                                    <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>			
                                </div> --}}
                            </div>
                        </div>                
                    </div>
                    <div class="sub-footer">
                        <div class="container">
                            <div class="row">
                                <div class="footer-text col-md-3">
                                    <p>&copy; 2020 Spinning Cube Solutions. Template from <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                                </div>
                                {{-- <div class="col-md-9 pull-right">
                                    <ul>
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                                        <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                                        <li><a href="#">Kids &amp; Teens</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="#">Research</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End: Footer -->
                
                <!-- jQuery Latest Version 1.x -->
                <script type="text/javascript" src="{{URL::asset('js/jquery-1.12.4.min.js') }}"></script>
                
                <!-- jQuery UI -->
                <script type="text/javascript" src="{{URL::asset('js/jquery-ui.min.js') }}"></script>
                
                <!-- jQuery Easing -->
                <script type="text/javascript" src="{{URL::asset('js/jquery.easing.1.3.js') }}"></script>

                <!-- Bootstrap -->
                <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
                
                <!-- Mobile Menu -->
                <script type="text/javascript" src="{{URL::asset('js/mmenu.min.js') }}"></script>
                
                <!-- Harvey - State manager for media queries -->
                <script type="text/javascript" src="{{URL::asset('js/harvey.min.js') }}"></script>
                
                <!-- Waypoints - Load Elements on View -->
                <script type="text/javascript" src="{{URL::asset('js/waypoints.min.js') }}"></script>

                <!-- Facts Counter -->
                <script type="text/javascript" src="{{URL::asset('js/facts.counter.min.js') }}"></script>

                <!-- MixItUp - Category Filter -->
                <script type="text/javascript" src="{{URL::asset('js/mixitup.min.js') }}"></script>

                <!-- Owl Carousel -->
                <script type="text/javascript" src="{{URL::asset('js/owl.carousel.min.js') }}"></script>
                
                <!-- Accordion -->
                <script type="text/javascript" src="{{URL::asset('js/accordion.min.js') }}"></script>
                
                <!-- Responsive Tabs -->
                <script type="text/javascript" src="{{URL::asset('js/responsive.tabs.min.js') }}"></script>
                
                <!-- Responsive Table -->
                <script type="text/javascript" src="{{URL::asset('js/responsive.table.min.js') }}"></script>
                
                <!-- Masonry -->
                <script type="text/javascript" src="{{URL::asset('js/masonry.min.js') }}"></script>
                
                <!-- Carousel Swipe -->
                <script type="text/javascript" src="{{URL::asset('js/carousel.swipe.min.js') }}"></script>
                
                <!-- bxSlider -->
                <script type="text/javascript" src="{{URL::asset('js/bxslider.min.js') }}"></script>
                
                <!-- Custom Scripts -->
                <script type="text/javascript" src="{{URL::asset('js/main.js') }}"></script>
        
    </body>


</html>
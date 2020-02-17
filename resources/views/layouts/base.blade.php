<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | DIRI Manuscripts</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="{{URL::asset('css/prism.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">  
      
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{URL::asset('css/styles.css')}}">

    @yield('head_content')
</head>

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.html">
                            {{-- <span aria-hidden="true" class="icon_documents_alt icon"></span> --}}
                            <span class="text-highlight">DIRI</span><span class="text-bold">Manuscripts</span>
                        </a>
                    </h1>
                    
                </div><!--//branding-->
                
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">@yield('heading')</li>
                </ol>
                
                <div class="top-search-box">
	                 <form class="form-inline search-form justify-content-center" action="{{ route('manuscripts.search') }}" method="post">
	            
			            <input type="text" placeholder="Search..." name="search" class="form-control search-input">
			            
			            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
			            
			        </form>
                </div>
                
            </div><!--//container-->
        </header><!--//header-->

        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"></i>@yield('heading')</h1>
                </div><!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            @yield('content')
                        </div>
                    </div>

        

                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">
                            
                            <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                                <a class="nav-link" href="#">About the Project</a>
                                <a class="nav-link" href="{{ route('manuscripts.index') }}">Manuscripts</a>
                                <a class="nav-link" href="{{ route('manuscripts.showSearchForm')}}">Search</a>
                            @guest
                                
                            @else
                            <a href="#" class="nav-link disabled">Admin</a>
                            <nav class="doc-sub-menu nav flex-column">
                                <a class="nav-link" href="{{ route('voyager.login') }}">Admin Panel</a>
                                <a class="nav-link" href="{{ route('manuscripts.create') }}">Add New Manuscript</a>
                                <a class="nav-link" href="{{route('logout') }}">Logout</a>
                            </nav> 
                            @endguest
                            </nav><!--//doc-menu-->
                            
                        </div>
                    </div><!--//doc-sidebar-->
                </div>
            </div>
        </div>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Dhammachai International Research Institute</p>
                        <p>399 George Street, Dunedin, New Zealand</p>
                        <p><a href="info@diri.ac.nz">info@diri.ac.nz</a></p>
                        <p>(+64)22 560 0339</p>

                    </div>
                    <div class="col-sm-5">
                        <p>Website designed by Spinning Cube Solutions</p>
                        <p>&copy; 2020 Dhammachai International Research Institute</p>
                    </div>s
                </div>
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
                
            </div><!--//container-->
        </footer><!--//footer-->
    
    <!-- Main Javascript -->          
    <script type="text/javascript" src="{{URL::asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('js/prism.js') }}"></script>    
    <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>      
    <script type="text/javascript" src="{{URL::asset('js/stickyfill.min.js')}}"></script>                                                             
    <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>

</body>
</html>
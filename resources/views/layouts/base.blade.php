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
    {{-- Favicon --}}
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
      
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{URL::asset('css/styles.css')}}">

    @yield('head_content')
</head>

<body class="body-green" style="padding-bottom: 0;">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.html">
                            {{-- <span aria-hidden="true" class="icon_documents_alt icon"></span> --}}
                            <img src="{{ URL::asset('/img/logo.png') }}" alt="DIRI Manuscript Project" width="350">
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
			            @csrf
			        </form>
                </div>
                
            </div><!--//container-->
        </header><!--//header-->
        <nav class="navbar navbar-expand-lg navbar-light style="background-color: ">
            <p class="navbar-brand" style="color: white;">..........<p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('manuscripts.index')}}">Manuscript List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manuscripts.showSearchForm') }}">Search Manuscripts</a>
                  </li>
                  @guest
                      
                  @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/admin/login">Admin Panel</a>
                    <a class="dropdown-item" href="{{ route('manuscripts.create') }}">Create New Manuscript</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                    @csrf
                    </form>
                  </div>
                  @endguest
                </li>
              </ul>
            </div>
          </nav>


        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"></i>@yield('heading')</h1>
                </div><!--//doc-header-->
                <div class="doc-body row middlerow">
                    <div class="doc-content col-md-12 col-12 order-1">
                        <div class="content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="footer w3-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <p>Dhammachai International Research Institute</p>
                        <p>399 George Street</p>
                        <p>Dunedin, New Zealand</p>
                        <p>(+64)22 560 0339</p>
                        <p><a href="info@diri.ac.nz">info@diri.ac.nz</a></p>  
                        <p><a href="http://diri.ac.nz" target="_blank">Main Website</a></p>

                    </div>
                    <div class="col-sm-5">
                        <p>Website created by Spinning Cube Solutions</p>
                        <p>&copy; 2020 Dhammachai International Research Institute</p>
                    </div>
                
                    <div class="col-sm-2 loginout">
                        @guest
                            <a href="{{ route('login') }}">Login</a>
                        @else
                            <a href="{{ route('logout') }}">Logout</a>
                        @endguest
                    </div> 
                </div>
                

                <div class="att">
                    <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                    <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
                </div>
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
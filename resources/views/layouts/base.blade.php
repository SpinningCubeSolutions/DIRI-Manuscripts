<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')

    @yield('head_content')
</head>

<body class="body-green" style="padding-bottom: 0;">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container headerimg">
                <div class="branding">
                    <h1 class="logo">
                        <a href="/">
                            {{-- <span aria-hidden="true" class="icon_documents_alt icon"></span> --}}
                            <img src="{{ URL::asset('/img/logo2.png') }}" alt="DIRI Manuscript Project" width="350">
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
        @include('layouts.nav')
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"></i>@yield('heading')</h1>
                </div><!--//doc-header-->
                <div class="doc-body row middlerow">
                    <div class="doc-content col-md-12 col-12 order-1">
                        <div class="content-inner">
                            @if (Session::has('flash_notification.message'))
                            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('flash_notification.message')}}
                            </div>
                            @endif
                            
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('layouts.footer')

</body>
</html>
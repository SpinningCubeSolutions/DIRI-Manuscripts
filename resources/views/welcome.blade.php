<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', 'Welcome!')
    @include('layouts.head')
</head>


<body class="landing-page">   
	
	<!-- GITHUB BUTTON JS -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
     
    <!--FACEBOOK LIKE BUTTON JAVASCRIPT SDK-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <img src="{{ URL::asset('/img/logo2.png') }}" alt="DIRI Manuscript Project" width="650">
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Ancient Buddhist manuscripts available to view online!</p>
                </div><!--//tagline-->
                
	             <div class="main-search-box pt-3 pb-4 d-inline-block">
                    <form class="form-inline search-form justify-content-center" action="{{ route('manuscripts.search') }}" method="post">
	            
			            <input type="text" placeholder="Search the manuscript library..." name="search" class="form-control search-input">
			            
			            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
			            @csrf
			        </form>
	             </div>
                 
                <div class="social-container">
                    <!-- Replace with your Facebook Button -->
                    <div class="fb-like" data-href="https://www.facebook.com/diri.ac.nz/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>            
                 </div><!--//social-container-->
                 
                
            </div><!--//container-->
        </header><!--//header-->

        @include('layouts.nav')
        
        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">A Digital Library of Buddhist Manuscripts</h2>
                <div class="intro">
                    <p>The Dhammachai International Research Institute (DIRI) is making ancient Buddhist manuscripts available to view online </p>
                    <p>To find out more about the project, visit our <a href="/about">About page</a>.</p>
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-yellow item-2 col-lg-4 col-12">
                            <a href="#">
                                <img src="{{ URL::asset('/img/covermanuscript-01.jpg') }}" width="250" alt="DIRI Collection">
                            </a>                            
                    </div><!--//item-->
                    <div class="item item-yellow item-2 col-lg-4 col-12">
                        <a href="#">
                            <img src="{{ URL::asset('/img/covermanuscript-02.jpg') }}" width="250" alt="DIRI Collection">
                        </a> 
                    </div><!--//item-->
                    <div class="item item-yellow item-2 col-lg-4 col-12">
                            <a href="#">
                                <img src="{{ URL::asset('/img/covermanuscript-03.jpg') }}" width="250" alt="DIRI Collection">
                            </a> 
                    </div><!--//item-->
                    <div class="item item-yellow col-lg-4 col-12">
                        <a href="#">
                            <img src="{{ URL::asset('/img/covermanuscript-04.jpg') }}" width="250" alt="DIRI Collection">
                        </a> 
                    </div><!--//item-->
                    <div class="item item-yellow col-lg-4 col-12">
                        <a href="#">
                            <img src="{{ URL::asset('/img/covermanuscript-05.jpg') }}" width="250" alt="DIRI Collection">
                        </a> 
                    </div><!--//item-->
                    <div class="item item-yellow col-lg-4 col-12">
                        <a href="#">
                            <img src="{{ URL::asset('/img/covermanuscript-06.jpg') }}" width="250" alt="DIRI Collection">
                        </a> 
                    </div><!--//item-->
                </div><!--//cards-->
                
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->

    @include('layouts.footer')
</body>
</html>
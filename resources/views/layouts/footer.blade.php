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
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                    @csrf
                </form>
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
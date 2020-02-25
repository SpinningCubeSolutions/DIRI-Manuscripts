<!DOCTYPE html>
<html>
<head>
    <title>Manuscript View | DIRI Manuscript Project</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- JS dependencies -->
    <script src="{{URL::asset('/js/BookReader/jquery-1.10.1.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery-ui-1.12.0.min.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery.browser.min.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/dragscrollable-br.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery.colorbox-min.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery.bt.min.js') }}"></script>

    <!-- mmenu library -->
    <link rel="stylesheet" href="{{URL::asset('/mmenu/dist/css/jquery.mmenu.css') }}"/>
    <link rel="stylesheet" href="{{URL::asset('/mmenu/dist/addons/navbars/jquery.mmenu.navbars.css') }}"/>
    <script src="{{URL::asset('/mmenu/dist/js/jquery.mmenu.min.js') }}"></script>
    <script src="{{URL::asset('/mmenu/dist/addons/navbars/jquery.mmenu.navbars.min.js') }}"></script>


    <!-- BookReader and plugins -->
    <link rel="stylesheet" href="{{URL::asset('/css/BookReader.css') }}"/>
    <script src="{{ URL::asset('js/BookReader/BookReader.js') }}"></script>

    <!-- Mobile nav plugin -->
    <script src="{{ URL::asset('/js/BookReader/plugin.mobile_nav.js') }}"></script>

    <!-- URL-changing plugin -->
    <script src="{{ URL::asset('/BookReader/plugin.url.js') }}"></script>

    <style>
        html, body { width: 100%; height: 100%; margin: 0; padding: 0; }
        #BookReader { width: 100%; height: 100%; }
    </style>

<script>
  var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
  return false;
  }
  function mousehandler(e){
  var myevent = (isNS) ? e : event;
  var eventbutton = (isNS) ? myevent.which : myevent.button;
  if((eventbutton==2)||(eventbutton==3)) return false;
  }
  document.oncontextmenu = mischandler;
  document.onmousedown = mousehandler;
  document.onmouseup = mousehandler;
  </script>

    {{-- <!-- Custom CSS overrides -->
    <link rel="stylesheet" href="{{ URL::asset('/css/BookReaderDemo.css') }}"/>  --}}
</head>

<body>
    <div id="BookReader"></div>

    {{-- JAVASCRIPT FOR BOOKREADER BEGINS HERE --}}
    <script type="text/javascript">
        function instantiateBookReader(selector, extraOptions) {
        selector = selector || '#BookReader';
        extraOptions = extraOptions || {};
        var options = {
          data: [
              @foreach($manuscriptImages as $image)
                
                [
                    { width: {{ $image["width"] }}, height: {{ $image["height"] }},
                    uri: '{{ $image["image_link"] }}'}
                ],
              @endforeach
          ],
      
          // Book title and the URL used for the book title link
          bookTitle: 'DIRI Manuscript Project',
          bookUrl: '/',
          bookUrlText: '',
          bookUrlTitle: '',
      
          // thumbnail is optional, but it is used in the info dialog
          // Metadata is optional, but it is used in the info dialog
          metadata: [
            {label: 'Origin', value: '{{ $manuscript->place_of_origin }}'},
            {label: 'Description', value: '{{ $manuscript->physical_description }}'},
          ],
      
          defaults: "mode/1up",
          // Override the path used to find UI images
          imagesBaseURL: '../BookReader/images/',
      
          ui: 'full', // embed, full (responsive)
      
          el: selector,
          
        };
        Object.assign(options, extraOptions);
        var br = new BookReader(options);
        br.init();
      }
      </script>
        <script>
        instantiateBookReader('#BookReader');
        </script>


</body>
</html>
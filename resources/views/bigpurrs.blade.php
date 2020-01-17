<!DOCTYPE html>
<html>
<head>
    <title>Manuscript</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">

     <!-- JS dependencies -->
    <script src="{{URL::asset('/js/BookReader/jquery-1.10.1.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery-ui-1.12.0.min.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery.browser.min.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/dragscrollable-br.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery.colorbox-min.js') }}"></script>
    <script src="{{URL::asset('/js/BookReader/jquery.bt.min.js') }}"></script>

    <!-- BookReader and plugins -->
    <link rel="stylesheet" href="{{URL::asset('/css/BookReader.css') }}"/>
    <script src="{{ URL::asset('js/BookReader/BookReader.js') }}"></script>

    <!-- Custom CSS overrides -->
<link rel="stylesheet" href="{{ URL::asset('/css/BookReaderDemo.css') }}"/> 
</head>
<body>
  <div id="BookReader" class="BRMode1up">
      Manuscript Display<br/>
      <noscript>
      <p>
          The BookReader requires JavaScript to be enabled. Please check that your browser supports JavaScript and that it is enabled in the browser settings.  You can also try one of the <a href="https://archive.org/details/goodytwoshoes00newyiala"> other formats of the book</a>.
      </p>
      </noscript>
  </div>
<script type="text/javascript">
  function instantiateBookReader(selector, extraOptions) {
  selector = selector || '#BookReader';
  extraOptions = extraOptions || {};
  var options = {
    data: [
      [
        { width: 2670, height: 708,
          uri: 'https://drive.google.com/uc?id=1fyIWJ4nDPAYmhb5d557dOxib1IbVGXyy#mode/1up' },
      ],
      [
        { width: 2670, height: 708,
          uri: 'https://drive.google.com/uc?id=1577yS32-cAJkdWOpe5toqASUwuElSFTw#mode/1up' },
      ],
      [
        { width: 2670, height: 708,
          uri: 'https://drive.google.com/uc?id=19a7Cb17Z_SL5_6El1SP2PXwTsna-cu0t#mode/1up' },
      ],
      [
        { width: 2670, height: 708,
          uri: 'https://drive.google.com/uc?id=1KAodBmBWi8UD3rjdRpxnXe5S_BvOt8Xa#mode/1up' },
      ],
    ],

    // Book title and the URL used for the book title link
    bookTitle: 'BookReader Demo',
    bookUrl: '/BookReaderDemo/index.html',
    bookUrlText: '',
    bookUrlTitle: 'This is the book URL title',

    // thumbnail is optional, but it is used in the info dialog
    thumbnail: '//archive.org/download/BookReader/img/page014.jpg',
    // Metadata is optional, but it is used in the info dialog
    metadata: [
      {label: 'Title', value: 'Big Purrs from the Purry Gypsy cat'},
      {label: 'Author', value: 'New Zealand\'s greatest Meow Machine'},
      {label: 'Meow', value: 'The Gypsy cat sends big purrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrs.'},
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
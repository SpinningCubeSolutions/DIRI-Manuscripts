<!DOCTYPE html>
<html>
  <head>
    <title>Get Image Data from Google Drive</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/bootstrap/bootstrap.min.css') }}">
    <!-- JQuery -->
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> --}}
    </head>
    <body>
    <h1>Google Drive Image Data</h1>

    <!--Add buttons to initiate auth sequence and sign out-->
    <button type="button" id="authorize_button" style="display: none;">Authorize</button>
    <button type="button" id="signout_button" style="display: none;">Sign Out</button>
    <p>Navigate to the folder containing the manuscript, then select the folder ID in the URL (after folder/), and paste it in the box below.</p>
    <p>ภาสภไทย</p>
    <div>
        <img src="{{ URL::asset('/img/googledrive.jpg') }}" alt="GoogleDrive">
    </div>
    <div>
        <input type="text" name="folder_name" id="folder_name" placeholder="Enter folder name here" style="display: none;">
    </div>
    <div><button type="button" id="search_button" style="display: none;">Search</button></div>

    <pre id="content" style="white-space: pre-wrap;">
    </pre>

    <script type="text/javascript">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '677441992784-b2gvbaf47dtktdp0aac32o3d4jchoui5.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyDezIoDM1HOcnE2HM6gTNtFH3oyEVVmmdo';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = 'https://www.googleapis.com/auth/drive.metadata.readonly';

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');
      var folderName = document.getElementById('folder_name');
      var serachButton = document.getElementById('search_button');
	    var folderId = "";
      var pre = document.getElementById('content');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
          serachButton.onclick = handleSearchClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          serachButton.style.display = 'block';
          folderName.style.display = 'block';
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
          serachButton.style.display = 'none';
          folderName.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }
      
      function handleSearchClick(event) {
        listFiles();
      }
      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }

      function appendTextArea(message) {
          document.getElementById('images').value += message + \r\n";
      }

      /**
       * Print files. 
       */
      function listFiles() {
        pre.innerHTML = "";
        folderId = folderName.value;  
        console.log(folderId);
        gapi.client.drive.files.list({
			'pageSize': 1000,
			'fields': "nextPageToken, files(id, name, imageMediaMetadata)",
			'q': "'" + folderId + "' in parents"
			}).then(function(response) {
          var files = response.result.files;
          if (files && files.length > 0) {
			alert('Number of files: ' + files.length);
            for (var i = 0; i < files.length; i++) {
              
			  var file = files[i];
              var id = file.id;
              var metadata = file.imageMediaMetadata;
            appendPre('https://drive.google.com/uc?id=' + file.id + '|' + metadata.width + ':' + metadata.height);
            }
          } else {
            appendPre('No files found.');
          }
        });
      }

    </script>

    <script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>Fire Base Web - File Upload</title>
    <style media="screen">
        body{
            display: flex;
            min-height: 100vh;
            width: 100%;
            padding: 0;
            margin:0;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        #uploader{
            -webkit-appearance: none;
            appearance:none;
            width: 50%;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<progress value="0" max="100" id="uploader">0%</progress>
<input type="file" value="upload" id="fileButton"/>

</body>

<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyA3v5BEb_i1Z0LxVcIAnieKW3m9s2drVTw",
    authDomain: "fir-realtime-db-d57fc.firebaseapp.com",
    databaseURL: "https://fir-realtime-db-d57fc.firebaseio.com",
    projectId: "fir-realtime-db-d57fc",
    storageBucket: "fir-realtime-db-d57fc.appspot.com",
    messagingSenderId: "524023069883"
  };
  firebase.initializeApp(config);
</script>
<script type="text/javascript">
     var uploader=document.getElementById('uploader');
     var fileButton=document.getElementById('fileButton');

     fileButton.addEventListener('change',function (e) {
        
var file=e.target.files[0];

var storageRef=firebase.storage().ref('Uploaded_Images/'+file.name);

var task=storageRef.put(file);
task.on('state_changed',

    function progress(snapshot){
        var percntge=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        uploader.value=percntge;
        console.log(percntge);
    },
    function error(err){

    },
    function complete()
    {

    }
    );
});

</script>
</html>
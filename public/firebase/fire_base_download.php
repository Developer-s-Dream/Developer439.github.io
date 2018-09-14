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
        #myimg{}

    </style>
</head>
<body>
<?php header('Access-Control-Allow-Origin: *'); ?>
<img  id="myimg">
<p id='text'></p>


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
 var storage = firebase.storage();

//var storageRef=storage.ref('Uploaded_Images');

//storageRef.child('stars.jpg').getDownloadURL().then(function(url) {
 storage.ref('Uploaded_Images/stars.jpg').getDownloadURL().then(function(url) {
    
  
   
   // storageRef.child('data.json').getDownloadURL().then(function(url) {
  //storageRef.child('stars.jpg').getDownloadURL().then(function(url) {
  // `url` is the download URL for 'images/stars.jpg'


  // Or inserted into an <img> element:
  var img = document.getElementById('myimg');
  img.src = url;
}).catch(function(error) {
  // Handle any errors
});
</script>
</html>
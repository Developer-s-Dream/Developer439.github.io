<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>Fire Base Web - Database Write</title>
    <!-- Firebase App is always required and must be first -->
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>

<!-- Add additional services you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script>
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
       

    </style>
</head>
<body>

<pre id='object'></pre>
<pre id='objectName'></pre>
<pre id='objectGender'></pre>
<pre id='objectFavs'></pre>

</body>


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
   //var presenceRef = firebase.database().ref("connection_status");
// Write a string when this client loses connection
//presenceRef.onDisconnect().set("disconnected!");
// Write a string when this client loses connection

const preObjectFavs=document.getElementById('objectFavs');
const preObjectName=document.getElementById('objectName');
const preObjectGender=document.getElementById('objectGender');
const preObject=document.getElementById('object');


const dbRefObject=firebase.database().ref().child('Object');
const dbRefObjectFavs=dbRefObject.child('Favs');
const dbRefObjectGender=dbRefObject.child('Gender');
const dbRefObjectName=dbRefObject.child('Name');
//const dbRefObject1=dbRefObject.child('Favs');

dbRefObject.once('value',snap=>{
    //console.log(snap.val());
    //preObject.innerHTML=snap.val();
    preObject.innerHTML=JSON.stringify(snap.val(),null,3);
    console.log(snap.val());
});

dbRefObjectFavs.once('value',snap=>{
    //console.log(snap.val());
    preObjectFavs.innerHTML=snap.val();
    console.log(snap.val());
});
dbRefObjectGender.once('value',snap=>{
    //console.log(snap.val());
    preObjectGender.innerHTML=snap.val();
    console.log(snap.val());
});
dbRefObjectName.once('value',snap=>{
    //console.log(snap.val());
    preObjectName.innerHTML=snap.val();
    console.log(snap.val());
});



/*var connectedRef = firebase.database().ref(".info/connected");
connectedRef.on("value", function(snap) {
  if (snap.val() === true) {
    alert("connected");
    presenceRef.set("connected!");
  } else {
    alert("not connected");
    presenceRef.set("dis-connected!");
  }
});*/

</script>
</html>
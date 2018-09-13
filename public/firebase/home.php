<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,
 body {
   height: 100%;
   width: 100%;
   margin: 0;
   background: #28be172b/*2E282A*/;
 }
 
 button {
   background: #bbebb6;
   border: none;
 }
 
 button::-moz-focus-inner {
   border: 0;
 }
 .fa{
    /*color: #28be17;*/
 }
 
 :focus {
   outline: none;
 }
 
 ::-moz-focus-inner {
   border: 0;
 }
 
 .btn-nav:hover {
   cursor: pointer;
 }
 
 .btn-nav:hover .bar {
   background: #17BEBB;
 }
 
 .bar {
   display: block;
   height: 5px;
   width: 50px;
   background: #fff;
   margin: 10px auto;
 }
 
 .btn-nav {
   display: block;
   padding: 15px 0;
   width: 50px;
   position: fixed;
   left: 20px;
   margin: 0 auto;
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -ms-transition: all 1s ease;
   -o-transition: all 1s ease;
   transition: all 1s ease;
 }
 
 .btn-nav:focus {
   outline: none;
 }
 
 .middle {
   margin: 0 auto;
 }
 
 .bar {
   -webkit-transition: all .7s ease;
   -moz-transition: all .7s ease;
   -ms-transition: all .7s ease;
   -o-transition: all .7s ease;
   transition: all .7s ease;
 }
 
 .animated {
   z-index: 999;
 }
 
 .animated .arrow-top-r {
   -webkit-transform: rotateZ(-45deg) translateY(11px);
   -moz-transform: rotateZ(-45deg) translateY(11px);
   -ms-transform: rotateZ(-45deg) translateY(11px);
   -o-transform: rotateZ(-45deg) translateY(11px);
   transform: rotateZ(-45deg) translateY(11px);
   width: 25px;
 }
 
 .animated .arrow-middle-r {
   -webkit-transform: translateX(25px);
   -moz-transform: translateX(25px);
   -ms-transform: translateX(25px);
   -o-transform: translateX(25px);
   transform: translateX(25px);
 }
 
 .animated .arrow-bottom-r {
   -webkit-transform: rotateZ(45deg) translateY(-11px);
   -moz-transform: rotateZ(45deg) translateY(-11px);
   -ms-transform: rotateZ(45deg) translateY(-11px);
   -o-transform: rotateZ(45deg) translateY(-11px);
   transform: rotateZ(45deg) translateY(-11px);
   width: 25px;
 }
 
 .nav-container {
   position: absolute;
   left: -50%;
   top: 0;
   background: #CD5334;
   height: 100%;
   width: 150px;
 }
 
 .nav-list {
   cursor: pointer;
   list-style-type: none;
   top: 50%;
   text-align: center;
   position: relative;
   margin: 0;
   padding: 0;
   -webkit-transform: translateY(-50%);
   -moz-transform: translateY(-50%);
   -ms-transform: translateY(-50%);
   -o-transform: translateY(-50%);
   transform: translateY(-50%);
 }
 
 .list-item {
   margin: 20px auto;
   border: 2px solid #fff;
   width: 50px;
   padding: 15px;
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -ms-transition: all 1s ease;
   -o-transition: all 1s ease;
   transition: all 1s ease;
 }
 
 .list-item:hover {
   border: 2px solid #17BEBB;
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -ms-transition: all 1s ease;
   -o-transition: all 1s ease;
   transition: all 1s ease;
 }
 
 .list-item:hover .fa {
   color: #17BEBB;
   -webkit-transform: scale(1.5);
   -moz-transform: scale(1.5);
   -ms-transform: scale(1.5);
   -o-transform: scale(1.5);
   transform: scale(1.5);
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -ms-transition: all 1s ease;
   -o-transition: all 1s ease;
   transition: all 1s ease;
 }
 
 .list-item a {
   color: #fff;
   font-size: 1.7em;
   display: block;
   width: 100%;
 }
 
 .fa {
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -ms-transition: all 1s ease;
   -o-transition: all 1s ease;
   transition: all 1s ease;
 }
 
 @keyframes showNav {
   from {
     left: -100%;
   }
   to {
     left: 0;
   }
 }
 
 @-webkit-keyframes showNav {
   from {
     left: -100%;
   }
   to {
     left: 0;
   }
 }
 
 @-moz-keyframes showNav {
   from {
     left: -100%;
   }
   to {
     left: 0;
   }
 }
 
 @-o-keyframes showNav {
   from {
     left: -100%;
   }
   to {
     left: 0;
   }
 }
 
 .showNav {
   -webkit-animation: showNav .5s ease forwards;
   -moz-animation: showNav 1s ease forwards;
   -o-animation: showNav 1s ease forwards;
   animation: showNav .5s ease forwards;
 }
 
 @keyframes hideNav {
   from {
     left: 0;
   }
   to {
     left: -100%;
   }
 }
 
 @-webkit-keyframes hideNav {
   from {
     left: 0;
   }
   to {
     left: -100%;
   }
 }
 
 @-moz-keyframes hideNav {
   from {
     left: 0;
   }
   to {
     left: -100%;
   }
 }
 
 @-o-keyframes hideNav {
   from {
     left: 0;
   }
   to {
     left: -100%;
   }
 }
 
 .hideNav {
   -webkit-animation: hideNav 1s ease forwards;
   -moz-animation: hideNav 1s ease forwards;
   -o-animation: hideNav 1s ease forwards;
   animation: hideNav 1s ease forwards;
 }
 
 .hidden {
   display: none;
 }

.ua {
  position:relative;
  left: 20px;
  padding: 5px;
  color: #fff;
  font-size: 1.25em;
}

.ua:hover .fa {
   color: #17BEBB;
   -webkit-transform: scale(1.5);
   -moz-transform: scale(1.5);
   -ms-transform: scale(1.5);
   -o-transform: scale(1.5);
   transform: scale(1.5);
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -ms-transition: all 1s ease;
   -o-transition: all 1s ease;
   transition: all 1s ease;
}
.colorr{ background:#cd5334;}
</style>
</head>
<body>
<button class="btn-nav hidden">
  <div class="bar arrow-top-r"></div>
  <div class="bar arrow-middle-r"></div>
  <div class="bar arrow-bottom-r"></div>
</button>

<div class="nav-container hidden hideNav">

  <ul class="nav-list">
    <li class="list-item"><a href=""><i class="fa fa-gift"></i></a></li>
    <li class="list-item"><a href=""><i class="fa fa-moon-o"></i></a></li>
    <li class="list-item"><a href=""><i class="fa fa-star"></i></a></li>
    <li class="list-item"><a href=""><i class="fa fa-truck"></i></a></li>
    <li class="list-item"><a href=""><i class="fa fa-umbrella"></i></a></li>
  </ul>
</div>

<a href="./download" class="ua" target="_self"><br/>
File Download-Storage_image</a>
<a href="./downloadJson" class="ua" target="_self"><br/>
File Download-Storage_Json</a>
<a href="./downloadJsonUsingPhp" class="ua" target="_self"><br/>
File Download-Storage_Json_Using_Php</a>
<a href="./upload" class="ua" target="_self"><br/>
File Upload-Storage</a>

<a href="./read-db" class="ua" target="_self"><br/>
File RealTime Database-Read</a>

<a href="./write-db" class="ua" target="_self"><br/>
File RealTime Database-Write</a>

</body><script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><script>
 $(window).load(function() {
   $(".btn-nav").on("click tap", function() {
     $(".nav-container").toggleClass("showNav hideNav").removeClass("hidden");
     $(this).toggleClass("animated");
     $(this).toggleClass("colorr");
   });
 });
</script>
</html>
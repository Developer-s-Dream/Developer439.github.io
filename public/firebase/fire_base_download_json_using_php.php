<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>Firebase Storage using php</title>
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
<img  id="myimg">
<p id='text'><?=dwnld();?></p>


</body>

<?php 
function dwnld()
{
$this->load->library('curl');
$this->curl->create('https://www.google.com/');
$data = $this->curl->execute();
echo $data;
}
?>
</html>



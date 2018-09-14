<?php
//$myObj=array('response'=>false);
   session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){

        
         $flag=0;
if(!isDate($_POST['dob']))
{
   $_SESSION['DobErr']="* enter the correct date of birthh";
   $flag=1;
   //echo "<br>enter the correct date of birth";
}
if(!isMob($_POST['mobile']))
{
    $_SESSION["MobErr"]="* enter a valid mobile numberr";
     $flag=1;
 //echo "<br>enter a valid mobile number";
}

$name = $_POST["sname"];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {

    //echo "<br>name can contain only letters and white space";
  $_SESSION["nameErr"] = "* Only letters and white space allowed"; 
   $flag=1;
}
$email = $_POST["mail"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //echo "<br>invalid email format";
  $_SESSION["MailErr"] = "* Invalid email format"; 
   $flag=1;
}
$hobbyy = $_POST["hobbie"];
if (!preg_match("/^[a-zA-Z ]*$/",$hobbyy)) {
  $_SESSION["HobErr"] = "* hobbie can contain only letters and white space"; 
   $flag=1;
}
$addr = $_POST["address"];
if (!preg_match("/^[a-zA-Z0-9\\-\/\ ]*$/",$addr)) {
  $_SESSION["AddErr"]= "* address can contain only letters and white space"; 
   $flag=1;
}
if($flag==0){     
   echo '<p align="center"><b style="font-size:25;color:red;">successfully saved the details of student</b></p>';
  /*$myObj['response']  =true;
  $myjson=json_encode($myObj);
  echo $myjson;*/

  //echo $_SESSION["MobErr"];
  $data['res']='successfully saved the details of student';
  print_r($data);
    }
     
     else{
      //  $myObj['response'] =false;
  //$myjson=json_encode($myObj);
   //echo $myjson;
   echo '<p align="center"><b style="font-size:25;color:yellow;">successfully saved the details of student</b></p>';
  
}



}  
else{
 /* $myObj['response'] =false;
  $myjson=json_encode($myObj);
   echo $myjson; */
   echo '<p align="center"><b style="font-size:25;color:green;">successfully saved the details of student</b></p>';
    }



//functions for validation
function isDate($string) {
   
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$string))
    return true;
    else
    return false;
}
function isMob($value)
{

if(!preg_match('/^(?:(?:\+|0{0,2})91([\-])?|[0]?)?[789]\d{9}$/', trim($value)))
{
     return false;
} else {
    return true;
}
}
//print_r($_SESSION);
//echo json_encode($_SESSION);
?>
<?php
$fname="";
$name="";
$pass="";
$email="";
$checkbox="";
$radio="";
$v1=$v2=$v3="";
$fname=$lname=$email=$designation=$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$pass=$_REQUEST["password"];
$email=$_REQUEST["email"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5) || preg_match('~[0-9]+~', $_REQUEST["fname"]) )
{
    $fname= "You must enter your first name";
}
else
{
    $fname=$_REQUEST["fname"];
}

if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5) || preg_match('~[0-9]+~', $_REQUEST["lname"]) )
{
    $lname= "You must enter your last name";
}
else
{
    $lname=$_REQUEST["lname"];
}

if(isset($_REQUEST["designation"]))
{
    $radio= $_REQUEST["designation"];
}
else{
    $radio= "Please select at least one post.";
}

if(!isset($_REQUEST["lan1"])&&!isset($_REQUEST["lan2"])&&!isset($_REQUEST["lan3"]))
{
    $checkbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["lan1"]))
   {
       $v1= $_REQUEST["lan1"];
   }
   if(isset($_REQUEST["lan2"]))
   { 
       $v2= $_REQUEST["lan2"];
   }
   if(isset($_REQUEST["lan3"]))
   {
       $v3= $_REQUEST["lan3"];
   }
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $email="you must enter email";
}
else
{
    $email= "your email is ".$email;
}

if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<8))
{
    $pass= "You must enter a valid password";
}
else
{
    $pass= "PASSWORD WAS ACCEPTED";
}


}
?>

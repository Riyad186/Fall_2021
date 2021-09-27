<?php

$message ="";
$message1="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $FIRST=$_POST["username"];
    $LAST=$_POST["name"];
    
  
    
if (empty ($FIRST)){
    $message ="Please try again";
   
}
else
 {
     $message=$FIRST;
 }
     
if (empty ($LAST)){
    $message1 ="Please try again";
   
}
else
 {
     $message1=$LAST;
 }

 
  

}







?>
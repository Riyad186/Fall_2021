<?php

$message ="";
$message1="";
$message2="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $programmer=$_POST["programmer"];
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
 if (empty ($programmer)){
    $message2 ="Please try again";
   
}
else
 {
     $message2=$programmer;
 }

 
 


}







?>
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="CV";
 
 $conn=new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
     die("connection failed".$connect_error);

 }
 $test=TRUE;
 $username=$_REQUEST["user"];


 $password=$_REQUEST["pass"];

 $fullname=$_REQUEST["Full"];
  $mobile=$_REQUEST["mobile"];
 $dob=$_REQUEST["dob"];
 $university=$_REQUEST["university"];

 $degree=$_REQUEST["degree"];

  $major=$_REQUEST["major"];


$result=$_REQUEST["result"];

 $passing=$_REQUEST["passing"];
 
 $sql="INSERT INTO employee(username,password,fullname,mobile,dob,university,degree,major,result,passing) VALUES ( '$username','$password','$fullname',' $mobile','$dob','$university','$degree','$major','$result','$passing')";
 if($conn->query($sql)==$test)
 {
     if($_REQUEST["submit"]==TRUE){
        echo "successfully inserted!";
    }
                                                                                                                                             
 }
 else{
     echo "error:". $sql. "<br>".$conn->error;

 }
 $conn->close();

?>
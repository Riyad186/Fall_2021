<?php 
 include 'Db.php';
 
 
   
 $usernames="";
 $passwords="";
 $fullname="";
 $mobile="";
 $dob="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_REQUEST["user"])){
                $usernames=$_REQUEST["user"];
            }
            else
             {
                 echo "please input here";
             }
             if(!empty($_REQUEST["pass"])){
                 $passwords=$_REQUEST["pass"];
             }
             else {
                 echo "input <br>";
             }
              if(!empty($_REQUEST["Full"]))
              {
                  $fullname=$_REQUEST["Full"];
              }
              else{
                   echo "fill it <br>";
              }
              if(!empty($_REQUEST["mobile"])){
                      $mobile=$_REQUEST["mobile"];
              }
              else 
              {
                  echo  $mobile="Type here <br>";
              }
              if(!empty($_REQUEST["dob"])){
                   $dob=$_REQUEST["dob"];
              }
              else 
              {
                  echo  $mobile="type here<br>";
              }
               
                if(isset($_REQUEST["submit"])){
                function insertUser($usernames,$passwords,$fullname,$mobile,$dob) {

                    $query = "insert into dummy values ('$usernames','$passwords','$fullname','$mobile','$dob');";
                    
                    return execute($query);
                   }
                }

                  
            }
               
              
              
 










?>
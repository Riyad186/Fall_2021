<?php
   	if($_SERVER["REQUEST_METHOD"]=="POST"){

	  
	   $formdata = array(
	      'fname'=> $_POST["fname"],
	      'lname'=> $_POST["lname"],
	      'designation'=>$_POST["designation"],
	      'lan1'=> $_POST["lan1"],
          //'lan2'=> $_POST["lan2"],
          //'lan3'=> $_POST["lan3"],
          'email'=> $_POST["email"],
          'password'=> $_POST["password"],
          'file'=> $_POST["file"]

	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
  
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);



}
?>
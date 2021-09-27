<?php include "Test.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTml</title>
</head>
<body>
    <form action=" " method="POST">
      First Name:   <input type="text" name="username"><br>
      <?php
      echo $message;
      ?>
      Last  Name:   <input type="text" name="name">
      <?php 
      echo $message1;
       ?>
    
      
      Age:          <input type="number" name="age"><br>
      Designation: 
      <input type="radio" name="programmer" value="Junior">Junior Programmer
<input type="radio" name="programmer" value="Senior">Senior Programmer
<input type="radio" name="programmer" value="Project">Project Lead
<br>
<?php
echo  $programmer;
?>
erred Language  <input type="checkbox" name="language">JAVA
<input type="checkbox" name="language">PHP
<input type="checkbox" name="language">c++
<br>
 Please choose a file <input type="file"  > 
  <input type="submit">
<input type="reset">

</body>
</html>
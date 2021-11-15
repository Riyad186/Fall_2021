<?php include "Process.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="test.css">
    </head>
<body>
    <center>
    <h1>ABC MANAGEMENT SYSTEM</h1>
<h3>We create Future</h3>
<form action="" method="post">
    </center>


 <h4>First name: <input type="text" name="fname"> <?php echo $fname; ?>
<br>
<h4>Last name: <input type="text" name="lname"> <?php echo $lname; ?>
<br>
<h4>Age: <input type="number" name="lname"> <?php echo $lname; ?>
<br>
<p>Designation</p>
  <input type="radio" id="opt1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="opt2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="opt3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>

  <?php echo $radio; ?>
<br>

<h5>Preferred language</h5>
<input type="checkbox" id="lan1" name="lan1" value="JAVA">
<h4>Preferred language is JAVA 
<input type="checkbox" id="lan2" name="lan2" value="PHP">
<h4>Preferred language is PHP 
<input type="checkbox" id="lan3" name="lan3" value="C++">
<h4>Preferred language is C++ 
<br>
<?php echo $checkbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>

<h4>E-mail: <input type="text" name="email"> <?php echo $email; ?>
<br>
Password: <input type="password" name="password"> <?php echo $pass; ?>
<br>
Please choose a file  <input type="file" value="Choose File"> 

<br>




<input id="submit" type="submit" value="SUBMIT">
<input type="reset" id="reset" value="RESET">
</form>
</body>
</html>

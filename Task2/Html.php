

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="Demo.php" method="POST">
First name: <input type="text" name="fname"> 
Last name: <input type="text" name="lname"> 
<br>
Age: <input type="number" name="lname">
<br>
<p>Designation
  <input type="radio" id="opt1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="opt2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="opt3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>
</p>

<br>

Preferred language
<input type="checkbox" id="lan1" name="lan1" value="JAVA">Java
 <br>
<input type="checkbox" id="lan2" name="lan1" value="PHP">PHP
<br>
<input type="checkbox" id="lan3" name="lan1" value="C++">C++
 <br>
<br>



<br>

E-mail: <input type="text" name="email">
Password: <input type="password" name="password"> 
Please choose a file  <input type="file" name ="file" value="Choose File"> 

<br>




<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</form>
</body>
</html>

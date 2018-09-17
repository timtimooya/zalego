<html>
<body>
	<form action="" method="POST">
username<input type="text" placeholder="insert username" name="username" required>
password<input type="password" placeholder="insert password" name="password" required>

<input type="submit" name="submit" value="submit">
</form>
<?php

$conn=mysqli_connect('localhost','root','');  //used to connect to xampp
      mysqli_select_db($conn,'timzal'); //used to connect to database

if (isset($_POST['submit'])){
	
$username=$_POST['username'];    //varriable are being declared
$password=$_POST['password'];

      $query1=mysqli_query($conn,"select * from interface where username='$username' and passsword='$password'")or die(mysqli_error($conn));   // used to select rows form the table
     

      $queryx=mysqli_num_rows($query1) or die(mysqli_error($conn)); //used to check values on a row
  
    if ($queryx>0) {

  echo '<script type=text/javascript>';

           echo 'window.alert("successfully logged in");';
                echo 'window.location.href="view.php";';
       echo '</script>';



} else{

echo '<script>window.alert("please put the correct username and password")</script>';


  }




}
?>
</body>
</html>
<html>
<head>
<title>timothy</title>
</head>
<body>
<form action="" method="POST">

<label>firstname</label><input type="text" placeholder="insert firstname" name="firstname" required><br>
<label>lastname</label><input type="text" placeholder="insert lastname" name="lastname" required><br>
<label>username<label><input type="text" placeholder="insert username" name="username" required><br>
<label>password</label><input type="password" placeholder="insert password" name="password" required><br>

<input type="submit" name="submit" value="submit">
<a href="login.php" button type="button">login in</button>

</form>
<?php

$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
      mysqli_select_db($conn,'timzal')or die(mysqli_error());

if (isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];


    $query=mysqli_query($conn,"insert into interface (firstaname,secondname,username,passsword)value('$firstname','$lastname','$username','$password')")or die(mysqli_error($conn));


       if ($query){
	
          echo'<script> window.alert("successfully inserted")</script>';


             }else{

            echo'<script>window.alert("pleace insert again") </script>';
           }
    }
?>
</body>
</html>
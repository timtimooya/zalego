<html>
<head>
	
<title>view.php</title>


</head>

<body>
<?php 
$conn=mysqli_connect('localhost','root','')or die(mysqli_error());  //used to connect to xampp
      mysqli_select_db($conn,'timzal') or die(mysqli_error()); //used to connect to database



echo "<table>

<tr>
<th>Firstname</th>
<th>last name</th>
<th> username</th>
<th>password</th>

</tr>";
$query=mysqli_query($conn, "select * from interface")or die(mysqli_error());
 while($tim= mysqli_fetch_array($query)){    // used to fetch data from the database


echo"<tr>";
echo "<td>".$tim['firstaname']. "</td>";
echo "<td>".$tim['secondname']. "</td>";
echo "<td>".$tim['username']. "</td>";
echo "<td>".$tim['passsword']. "</td>";


echo"</tr>";

}
echo "</table>";

?>
</body>


</html>
<?php
session_start();
if (!isset( $_SESSION["username"])) 
{

header("Location:http://localhost/login.php");
exit;
}
else{
$user=$_SESSION["username"];
$conn = new mysqli("localhost","root","","details");
$sql ="select * from student3 where username = ('$user')";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc())
{
	$username=$row['username'];
	$dob=$row['dob'];
	$age=$row['age'];
	$number=$row['number1'];

}
}
?>
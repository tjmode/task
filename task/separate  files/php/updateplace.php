<?php
$username=$_POST['username'];
$dob=$_POST['dob'];
$number=$_POST['number'];
$age=$_POST['age'];

$conn = new mysqli("localhost","root","","details");
// prepare and bind
$sql1="update student3 SET dob=? , number1=? , age=?  where username=?";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("ssss",$dob,$number,$age,$username);
$stmt1->execute();
	


	
// if ($age!="") {
// 	$conn = new mysqli("localhost","root","","details");
// // prepare and bind
// $sql="update student3 SET age=?  where username=?";
// $stmt1 = $conn->prepare($sql1);
// $stmt1->bind_param("ss",$age,$username);
// $stmt1->execute();
	
// 	}


// if ($number!="") {
// 	$conn = new mysqli("localhost","root","","details");
// // prepare and bind
// $sql1="update student3 SET number1=?  where username=?";
// $stmt1 = $conn->prepare($sql1);
// $stmt1->bind_param("ss",$number1,$username);
// $stmt1->execute();
// 	}

include 'json.php';
echo "updated";
?>
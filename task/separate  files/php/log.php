<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli("localhost","root","","details"); 
$sql  = "SELECT count(1) FROM student3 WHERE username = ? and password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username,$password);
$stmt->execute();
$stmt->bind_result($found);
$stmt->fetch();
if ($found)
{
	session_start();
	$_SESSION["username"] = $username;
    echo "yes";
}
else{
	echo "no";
}


// $conn = new mysqli("localhost","root","","details");
// $stmt1 = $conn->prepare("SELECT password FROM student3 WHERE username = ? ");
// $stmt1->bind_param("s", $username);
// $stmt1->execute();
// //$sql ="select password from student3 where username = ('$username')";
// $result = $conn->query($stmt1);
// while ($row = $result->fetch_assoc())

// {
// 	echo $row['password'];
// 	if ($row['password'] == $password)
// 	{
// 		session_start();
// 		$_SESSION["username"] = $username;
// 		echo "yes";
// 	}
// 	else{
// 		echo 2;
// 	}
// }

?>
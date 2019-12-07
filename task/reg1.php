<?php
$username =$_POST['username'];
$password =$_POST['password'];
$date1=$_POST['date'];
$age =$_POST['age'];
$number1 =$_POST['number'];

$conn = new mysqli("localhost","root","","details"); 
$sql  = "SELECT count(1) FROM student3 WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($found);
$stmt->fetch();
if ($found)
{
    echo "NO";
} 

else {
// {
// $sql1="INSERT INTO student3 (username,password,dob,age,number1) VALUES (?, ?, ? , ?, ?)";
// $stmt1 = $conn->prepare($sql1);
// $stmt1->bind_param("sssss", $username , $password, $date1, $age , $number1);
// $stmt1->execute();
// $stmt1->close();
// $conn->close();
// include 'json.php';
echo "YES";
}
?>

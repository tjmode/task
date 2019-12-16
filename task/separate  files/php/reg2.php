<?php
$username =$_POST['username'];
$password =$_POST['password'];
$date1=$_POST['date'];
$age =$_POST['age'];
$number1 =$_POST['number'];
$conn = new mysqli("localhost","root","","details"); 
$sql1="INSERT INTO student3 (username,password,dob,age,number1) VALUES (?, ?, ? , ?, ?)";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("sssss", $username , $password, $date1, $age , $number1);
$stmt1->execute();
$stmt1->close();
$conn->close();

$jsonfile="{username:".$username.",password:".$password.",date:".$date1.",age:".$age.",number:".$number1."}";

$data[] =$jsonfile;

$inp = file_get_contents('re.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('re.json', $jsonData);


include 'json.php';
echo "registered";
?>
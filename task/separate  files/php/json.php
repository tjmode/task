<?php
	//connection
	$conn = new mysqli('localhost', 'root', '', 'details');
 
	$data = array();
	$sql = "SELECT * FROM student3";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$data[] = $row;
	}
 
	//convert to json
	$data = json_encode($data);
 
	//create json file
	$filename = 'datas.json';
	if(file_put_contents($filename, $data)){
		
	} 
	else{
		echo 'An error occured in creating the file';
	}
 
?>
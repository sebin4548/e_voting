<?php



$input = $_POST["vote"];
$input_name = $_POST["voter_name"];



$mysqli = new mysqli("localhost","sbkwon","2019100845","sbkwon");

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else {  
	$sql = "SELECT * FROM P_Candidate WHERE giho=$input";
	$res = mysqli_query($mysqli, $sql);
	while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
		$tempNum = $newArray[5] +1;
	
	$sql = "UPDATE P_Candidate ";
	$sql .= " SET num=$tempNum WHERE giho='".$input."'";
	echo $sql;
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
 		echo "<br>success";
 	} else {
 		echo "<br>fail";
 	}
 	
 	$sql = "INSERT INTO P_VOTE";
	$sql .= " Values('$input', '$input_name')";
	echo $sql;
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) {
 		echo "<br>success";
 	} else {
 		echo "<br>fail";
 	}
 	
 	
}}

?>
<?php

$giho = $_POST["giho"];
$newGiho = $_POST["newGiho"];
$dang = $_POST["dang"];
$name = $_POST["name"];
$gongyak = $_POST["gongyak"];
$password = $_POST["password"];


$mysqli = new mysqli("localhost","sbkwon","2019100845","sbkwon");

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else {  
	$sql = "SELECT * FROM P_Candidate WHERE giho=$giho";
	$res = mysqli_query($mysqli, $sql);
	while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
		if($password == $newArray[4]){
			echo "비밀번호가 맞음";
				$sql = "Delete FROM P_Candidate ";
				
				$sql .= " WHERE giho='".$giho."'";
				echo $sql;
				$res = mysqli_query($mysqli, $sql); 
			 	if ($res) {
			 		echo "<br>success";
			 	} else {
			 		echo "<br>fail";
			 	}
		}
		else{
			echo"비밀번호가 틀림";
		}
		}
	

}

?>




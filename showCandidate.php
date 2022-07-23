<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$mysqli = new mysqli("localhost","sbkwon","2019100845","sbkwon");

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
	
} else { 
	$sql = "SELECT * FROM P_Candidate ORDER BY GIHO"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) { 
 		echo "<Table border=1>\n";
 		echo "<TH>기호</TH>  <TH>정당</TH>  <TH>이름</TH>  <TH>공약</TH>  <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
			$giho= $newArray[1]; 
 			$dang = $newArray[2]; 
			$name = $newArray[0]; 
			$gongyak = $newArray[3]; 
 			echo "<TD>".$giho."</TD>";
 			echo "<TD>".$dang."</TD>";
 			echo "<TD>".$name."</TD>";
 			echo "<TD>".$gongyak."</TD>";
 			echo "<TR>\n"; 
 		}
 		echo "</Table>\n";
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 

</body>
</html>
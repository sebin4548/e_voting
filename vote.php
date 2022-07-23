
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
 		echo "<TH>기호</TH>  <TH>정당</TH>  <TH>이름</TH>  <TH>공약</TH> <TH>투표</TH> <TR>\n";
 		echo "<FORM action=sqlVote.php method=post>\n"; 
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
			$giho= $newArray[1]; 
 			$dang = $newArray[2]; 
			$name = $newArray[0]; 
			$gongyak = $newArray[3]; 
			
			echo "<TD>".$giho."</TD>";
 			echo "<TD>".$dang."</TD>";
 			echo "<TD>".$name."</TD>";
 			echo "<TD>".$gongyak."</TD>";
			echo "<TD> <input type=radio name=vote value=$giho> </TD>";
			echo "<TR>\n"; 
			
 		}
 		echo "<input type=text name=voter_name>";
 		echo "<input type=submit value = '투표하기'>";
 		echo "</Form>\n";
 		echo "</Table>\n";
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 

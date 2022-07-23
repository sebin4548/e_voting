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
 		echo "<TH>기호</TH>  <TH>정당</TH>  <TH>이름</TH>  <TH>공약</TH> <TH>Password</TH> <TH>Update</TH> <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
			$giho= $newArray[1]; 
 			$dang = $newArray[2]; 
			$name = $newArray[0]; 
			$gongyak = $newArray[3]; 
			echo "<FORM action=sqlEditCandidate.php method=post>\n"; 
				echo "<TD><input type=text name=newGiho value='".$giho ."'></TD>";
					echo "<input type=hidden name=giho value=".$giho.">";
				
				
				echo "<TD><input type=text name=dang value='".$dang."'></TD>";
				echo "<TD><input type=text name=name value='".$name."'></TD>";
				echo "<TD><input type=text name=gongyak value='".$gongyak."'></TD>";
				echo "<TD><input type=password name=password </TD>";
				echo "<TD><input type=submit value=update></TD>";
				echo "<TR>\n"; 
			echo "</Form>\n";
 		}
 		echo "</Table>\n";
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 

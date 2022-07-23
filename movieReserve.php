<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화예매</title>
</head>
<body>
    <?php 
    $mysqli = new mysqli("localhost","sbkwon","2019100845","sbkwon");
    
    if (mysqli_connect_errno()) { 
        printf("Connect failed: %s\n", mysqli_connect_error()); 
        exit(); 
    } else { 
    		$sql = "SELECT * FROM MOVIE "; 
        $res = mysqli_query($mysqli, $sql); 
         if ($res) { 
         		echo "<FORM action=reseMovie.php method=post>\n";
             echo "<Table border=1>\n";
             echo "<TH>영화제목</TH>  <TH>Ranking</TH> <TH>선택</TH>   <TR>\n";
             while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                $title = $newArray["Title"];
                $id = $newArray['ID'];
                $rank = $newArray["Rank"];
                echo "<TD>".$title."</TD>";
                echo "<TD>".$rank."</TD>";
                echo "<TD> <input type=radio name=id value=$id> </TD>";
                 echo "<TR>\n"; 
             }
             echo "</Table>\n";
             echo "<input type=text name=user value=사용자이름>";
             echo "<input type=submit value=예약>"; 
             echo "</FORM>";
         } else { 
             printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
         } 
         mysqli_free_result($res); 
         mysqli_close($mysqli); 
    } 
    ?> 
    
</body>
</html>






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
	$mysqli = mysqli_connect("localhost", "sbkwon", "2019100845", "sbkwon");

	{
			echo("sebin");
			
			$sql = "CREATE TABLE mvlist(ID int PRIMARY KEY auto_increment, title char(20) not null, rank int not null )";
			$res = mysqli_query($mysqli, $sql);
			$sql = "INSERT INTO mvlist(title, rank) VALUES('pyo',3 )";
			$res = mysqli_query($mysqli, $sql);
			echo($res);
			
			
			$sql = "select * from MOVIE";
			$res = mysqli_query($mysqli, $sql);
	if($res){
			echo("<form action=reserveMovie.php method=post>\n");
			echo("<table border=1> \n");
			echo("<TD>영화제목</TD> <TD>Ranking</TD> <TD>선택</TD> <TR>\n");
			while($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
				$id = $newArray[0];
				$title = $newArray[1];
				$rank = $newArray[2];
				echo("<TD>$title</TD> <TD>$rank</TD>\n");
				echo("<TD><input type=radio name=id value=$id>\n");
				echo("<TR>");
			}
			echo("</table>");
			echo("<input type=text name=user value='input yout name'> ");
			echo("<input type=submit value='예약'>");
			echo("</form>");
			
	}
	else{
		printf("could not retrieve records : %s", mysqli_error($mysqli));
	}
	mysqli_free_result($res);
	mysqli_close($mysqli);
}
	?>
	
    
</body>
</html>
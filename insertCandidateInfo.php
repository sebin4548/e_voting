<?php
$name = $_POST["name"];
$giho = $_POST["giho"];
$dang = $_POST["dang"];
$gongyak = $_POST["gongyak"];
$password = $_POST["password"];

$mysqli = new mysqli("localhost","sbkwon","2019100845","sbkwon");

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO P_Candidate (name, giho, dang, gongyak, password)
			VALUES ('$name','$giho','$dang', '$gongyak', '$password');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<p>A record has been inserted.";
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}
	echo "<p>".$sql;
	mysqli_close($mysqli);
}
?>






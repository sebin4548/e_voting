<?php 
$mysqli = new mysqli("localhost","sbkwon","2019100845","sbkwon");

if (mysqli_connect_errno()) {         
                printf("Connect failed: %s\n", mysqli_connect_error()); 
                exit(); 
} else { 
                
      $sql = " DROP TABLE  P_VOTE;";
      $res_0 = mysqli_query($mysqli, $sql); 
      $sql = " DROP TABLE P_Candidate;";
      $res = mysqli_query($mysqli, $sql);
 
      $sql = "CREATE TABLE P_Candidate ( 
      name CHAR(15),  
      giho char(3) Primary Key,
      dang CHAR(15) NOT NULL,
      gongyak TEXT(300) NOT NULL,
      password char(30) NOT NULL,
      num int DEFAULT 0);";
      $res_1 = mysqli_query($mysqli, $sql); 
      
      $sql = "CREATE TABLE P_VOTE(
      giho char(3) PRIMARY KEY, 
      voter_name char(20),
      FOREIGN KEY (giho) REFERENCES P_Candidate(giho)
      );"; 
       $res_2 = mysqli_query($mysqli, $sql); 

if ($res_1 ==TRUE ) { 
        echo "Table Address has successfully been created."; 
} else { 
        printf("Could not create table: %s\n", mysqli_error($mysqli)); 
} 

mysqli_close($mysqli); 
} 
?> 
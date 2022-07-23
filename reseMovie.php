<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화 예매 확인</title>
</head>
<body>
    <?php
        $userID = $_GET["id"];
        $user = $_GET["user"];
        $mysqli = mysqli_connect("localhost","sbkwon", "2019100845", "sbkwon");

        if(mysqli_connect_errno){
            printf("Connect failed %s\n", mysqli_connect_error);
            exit();

        }
        else{
            printf("wow");
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
    
</body>
</html>
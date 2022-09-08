<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<h1 style="text-align: center;"> Webboard God God  </h1> 
    <hr> 
    <div align="center">
    <?php
        if($_POST["login"]=="admin" && $_POST["pwd"]=="ad1234" ){
            echo "ยินดีต้อนรับคุณ admin";
        }
        elseif($_POST["login"]=="member" && $_POST["pwd"]=="mem1234" ){
            echo "ยินดีต้อนรับคุณ member";
        }else{
            echo "ชื่อหรือบัญชีไม่ถูกต้อง";
        }
    ?>  
    </div>

    <div align="center">
        <a href="index.php"> กลับไปหน้าหลัก</a> 
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center;"> Webboard God God </h1>
    <hr>
    <h3 style="text-align: center;"> ต้องการดูกระทู้หมายเลข<?php echo $_GET["id"]; ?></h3>
    <table style="border: 2px solid black; width:40%" align="center">
        <tr>
            <td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td>
        </tr>
        <tr>
            <td><textarea name="txt" id="" cols="50" rows="5"style="width:98%"> </textarea></td>
        </tr>
        <tr>
            
            <td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td>
        </tr>
    </table>
    <div align="center">
        <a href="index.html"> กลับไปหน้าหลัก</a> 
    </div>

</html>
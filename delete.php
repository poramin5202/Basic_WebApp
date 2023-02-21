<?php
session_start();
    if($_SESSION['role']=='a'){
        $conn = new PDO("mysql:host=localhost; dbname=wedboard; charset=utf8","root","");
        $sql = "DELETE FROM post where id=$_GET[id]";
        $query = $conn->query($sql);
        if($query){
            header("location:index.php");
            die();
        }
    }
    else{
        echo "Error";
    }
?>
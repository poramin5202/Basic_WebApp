<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:login.php");
        die();
    }

        
        $comment = $_POST['comment'];
        $post_id = $_POST['post_id'];
        $user_id = $_SESSION['user_id'];

        $conn = new PDO("mysql:host=localhost;dbname=wedboard;charset=utf8","root","");
        $sql = "INSERT INTO comment (content, product_date, user_id, post_id) 
                VALUES ('$comment', NOW(), $user_id, $post_id)";

        $conn->exec($sql);
        $conn=null;
        header("location: post.php?id=$post_id"); 
        die();       
    ?>
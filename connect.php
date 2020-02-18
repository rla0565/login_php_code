<?php
        $host="localhost";
        $user="kimsoo";
        $password="1234";
        $db="users";
        $connect=new mysqli($host,$user,$password,$db);
        $connect->set_charset("utf8");
        if(mysqli_connect_errno()){
                echo "접속 실패";
        }
?>

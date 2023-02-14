<?php

$stu_id = $_GET['id'];

        include 'config.php';
        $sql = " delete from student where sid = $stu_id";
        $result = mysqli_query($conn, $sql);


        header("location: index.php");
?>
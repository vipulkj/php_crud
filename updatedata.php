<?php



$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
$sql = "update student set sname = '$stu_name', saddress = '$stu_address', sclass = '$stu_class', sphone = '$stu_phone' where sid = '$stu_id'";
$result = mysqli_query($conn, $sql);

header("location:index.php")



?>
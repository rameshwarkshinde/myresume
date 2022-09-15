<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

 include 'config.php';

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$stu_name}','$stu_address','$stu_class','$stu_phone')";

$result =  mysqli_query($conn, $sql) or die("unsucess");

header("Location: http://192.168.0.101/student-details/index.php");

mysqli_close($conn);

?>
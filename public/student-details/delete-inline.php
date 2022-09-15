<?php

include 'config.php';
$stu_id = $_GET['id'];

$sql = "DELETE FROM student where sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsucessful");

header("Location: http://192.168.0.101/student-details/index.php");

mysqli_close($conn);

?>
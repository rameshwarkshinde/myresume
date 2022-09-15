<?php include 'header.php';
if(isset($_POST['deletbtn'])){
    include "config.php";
    $stu_id = $_POST['sid'];

$sql = "DELETE FROM student where sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsucessful");

header("Location: http://192.168.0.101/student-details/index.php");

mysqli_close($conn);
}

?>

<div id="main-content">
    <h2>Delet Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class = "form-group">
            <label>Id</label>
            <input type="text" name="sid">

        </div>
        <input class="submit" type="submit" name="deletbtn" value="Delete"/>
</form>
</div>
</body>
</html>
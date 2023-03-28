<?php
// session_start();

// $added_by=$_SESSION['added_by'];
$cname = $_POST['cname'];

include("config.php");

$sql = "INSERT INTO categories(cname) VALUES('$cname')";

// $result=mysqli_query($conn,$sql);

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}


?>
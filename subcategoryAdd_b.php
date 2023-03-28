<?php
session_start();

$added_by=$_SESSION['added_by'];
$name = $_POST['name'];

include("config.php");

$sql = "INSERT INTO sub_categories(added_by,name) VALUES('$added_by','$name')";

// $result=mysqli_query($conn,$sql);

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

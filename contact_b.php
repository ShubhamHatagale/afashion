<?php
session_start();

$first_name=$_SESSION['first-name'];
$last_name=$_SESSION['last-name'];
$u_email=$_SESSION['user-email'];
$your_msg=$_SESSION['your-msg'];
$interested_in=$_SESSION['interested-in'];

include("wp-config.php");

        


$sql = "INSERT INTO wp_wajooba_contact_form(first-name,last-name,user-email,your-msg,interested-in) VALUES('$first_name','$last_name','$u_email','$your_msg','$interested_in')";


if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

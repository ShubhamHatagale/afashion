<?php
session_start();
unset($_SESSION['added_by']);
header("location:index.php")
?>
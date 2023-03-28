<?php

// $host="localhost";
// $user="root";
// $password="";
// $db="afashion";

$host="162.214.80.18"; 
$user="fkwxcbmy_afashion";
$password="admin@1234";
$db="fkwxcbmy_afashion";

$conn = mysqli_connect($host,$user,$password,$db);

if ($conn){
    
}else{
    die("no connection" . mysqli_connect_error());
}
?>
<?php 

include 'config.php';

$selectquery = "select * from admin";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);


while ($res = mysqli_fetch_array($query))
{
   echo $res['fname'] . "<br>";
   
}

?>
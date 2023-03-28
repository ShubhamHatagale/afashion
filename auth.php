<?php
session_start();
include("config.php");
if(isset($_POST['submit'])){
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM admin where userid='$userid' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    $res = mysqli_fetch_array($result);
    $id=$res['id'];

    if($num==1){
        $_SESSION['added_by'] = $id;
        ?>
        <script>
        alert("Login Successfull");
        location.replace("firms.php");

        </script>
        <?php  
    }else{
        ?>
        <script>
        alert("you have entered wrong userid or passsword");
        location.replace("index.php");
        </script>
        <?php  
    }
}
?>
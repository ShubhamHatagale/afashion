<?php
session_start();

include("config.php");
   
if(isset($_POST['submit'])){
    $added_by=$_SESSION['added_by'];
    $fname=$_POST['fname'];
    $cname=$_POST['cname'];
    $contact=$_POST['contact'];
    $lcontact=$_POST['lcontact'];
    $caddress=$_POST['caddress'];
    $email=$_POST['email'];
    $cstate=$_POST['cstate'];
    $pan=$_POST['pan'];
    $bank_name=$_POST['bank_name'];
    $acc_no=$_POST['acc_no'];
    $gst_number=$_POST['gst_number'];
    // $sql="SELECT * FROM login where email='$email' AND password='$password'";

    $sql="INSERT INTO customers (added_by,fname,cname,contact,lcontact,caddress,email,cstate,pan,bank_name,acc_no,gst_number)
    VALUES ('$added_by','$fname','$cname','$contact','$lcontact','$caddress','$email','$cstate','$pan','$bank_name','$acc_no','$gst_number')";

    $result=mysqli_query($conn,$sql);
    // $num=mysqli_num_rows($result);

    if($result){
        ?>
        <script>
        alert("user added successfully");
        location.replace("sales.php");
        </script>
        <?php
    }else{
        echo "you have entered wrong email or passsword";
    }
}

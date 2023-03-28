<?php
session_start();

include("config.php");

if (isset($_POST['submit'])) {
    $added_by = $_SESSION['added_by'];
    $uname = $_POST['uname'];
    $contact = $_POST['contact'];
    $lcontact = $_POST['lcontact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $states = $_POST['states'];
    $bank_name = $_POST['bank_name'];
    $acc_no = $_POST['acc_no'];
    $pan = $_POST['pan'];
    $adhar = $_POST['adhar'];
    $gstcust = $_POST['gstcust'];

    $sql = "INSERT INTO employee (added_by,uname,contact,lcontact,address,email,states,bank_name,acc_no,pan,adhar,gstcust)
    VALUES ('$added_by','$uname','$contact','$lcontact','$address','$email','$states','$bank_name','$acc_no','$pan','$adhar','$gstcust')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
?>
        <script>
            alert("user added successfully");
            location.replace("employee.php")
        </script>
<?php
    } else {
        echo "you have entered wrong email or passsword";
    }
}

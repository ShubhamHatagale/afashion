<?php
session_start();

include("config.php");

if (isset($_POST['submit'])) {
    $added_by = $_SESSION['added_by'];
    $fname = $_POST['fname'];
    $pname = $_POST['pname'];
    $address = $_POST['address'];
    $contac = $_POST['contac'];
    $gst = $_POST['gst'];

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $bank_name = $_POST['bank_name'];
    $ac_no = $_POST['ac_no'];
    $ifsc = $_POST['ifsc'];
    $branch = $_POST['branch'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (move_uploaded_file($file_tmp, "./uploads/$file_name")) {
        echo "success";
    } else {
        echo "error";
    }
    // $path = "/opt/lampp/htdocs/kunal_php_proj/uploads";
    // $move = "/opt/lampp/htdocs/kunal_php_proj/uploads/".$_FILES['image']['name'];
    // move_uploaded_file($_FILES['image']['tmp_name'], $move);

    // copy($_FILES['image']['tmp_name'], "/opt/lampp/htdocs/kunal_php_proj/uploads");

    // move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../../uploads/'. $_FILES["image"]['name']);
    // move_uploaded_file($_FILES['file']['name'], $move);

    // $sql="SELECT * FROM login where email='$email' AND password='$password'";

    $sql = "INSERT INTO admin (added_by,fname,pname,address,contac,gst,file1,bank_name,ac_no,ifsc,branch,userid,password,email)
    VALUES ('$added_by','$fname','$pname','$address','$contac','$gst','$file_name','$bank_name','$ac_no','$ifsc','$branch','$userid','$password','$email')";

    $result = mysqli_query($conn, $sql);
    // $num=mysqli_num_rows($result);


    // echo $file_name;
    // echo $file_tmp;
    // move_uploaded_file($file_tmp, "uploaded_img" . $file_name);

    // echo '<pre>';
    // print_r($file_name);
    // echo '</pre>';

    if ($result) {

?>
        <script>
            alert("user added successfully");
            location.replace("firms.php")
        </script>
<?php
    } else {
        echo "you have entered wrong email or passsword";
    }
}



// sudo chown -R www-data:www-data /Users/George/Desktop/uploads/

// sudo chown -R www-data:www-data /opt/lampp/htdocs/kunal_php_proj/uploads
<?php
session_start();
include("config.php");

if (isset($_POST['transfer'])) {
    $added_by = $_SESSION['added_by'];
    $fid = $_POST['fid'];
    $date = $_POST['date'];
    $tofirm = $_POST['tofirm'];
    $remark = $_POST['remark'];

    $prod_nameB = $_POST['prod_nameB'];
    $qtyinputB = $_POST['qtyinputB'];

    $vid = $_POST['vid'];
    $rowArr = sizeof($prod_nameB);

    echo $mainsql = "INSERT INTO stock_transfer_products(added_by,from_firm,date_time,to_firm,remark)VALUES('$added_by','$fid','$date','$tofirm','$remark')";
    $result = mysqli_query($conn, $mainsql);
    $lastid = $conn->insert_id;

    for ($j = 0; $j < $rowArr; $j++) {
      echo $sqlb = "INSERT INTO stock_transfer_variation(vid,transfer_row_id,prod_name,qty)VALUES('$vid[$j]','$lastid','$prod_nameB[$j]','$qtyinputB[$j]')";

        $result = mysqli_query($conn, $sqlb);

        echo  $getpvdata = "SELECT * FROM `purchase_variations` WHERE id='$vid[$j]'";
        $pvresult = mysqli_query($conn, $getpvdata);
        while ($pvres = mysqli_fetch_array($pvresult)) {
            $variationQty = $pvres['qty'];
            $variationId = $pvres['id'];
        }

        $subs = $variationQty - $qtyinputB[$j];

        echo $updates = "UPDATE `purchase_variations` SET `qty`=$subs WHERE id='$vid[$j]'";
        $updresult = mysqli_query($conn, $updates);
    }
}
?>



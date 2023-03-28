<?php
session_start();
include("config.php");

if (isset($_POST['return'])) {
    $added_by = $_SESSION['added_by'];
    $customer = $_POST['customer'];
    $invoice = $_POST['invoice'];
    $firm = $_POST['firm'];
    $date_time = $_POST['date_time'];
    $memo = $_POST['memo'];
    $all_totals = $_POST['all_totals'];

    $prod_name = $_POST['prod_name'];
    $qty = $_POST['qty'];
    $sale_prize = $_POST['sale_prize'];
    $total = $_POST['total'];
    $updId = $_POST['updId'];
    $qtyRigid = $_POST['qtyRigid'];

    $rowArr = sizeof($prod_name);

    // echo $customer;
    // echo $firm;

    // echo '<pre>';
    // print_r($qtyRigid);
    // echo '</pre>';


    // echo '<pre>';
    // print_r($prod_name);
    // echo '</pre>';

    // echo $date_time;
    for ($i = 0; $i < $rowArr; $i++) {
        if ($qty[$i] > $qtyRigid[$i]) {
?>
            <script>
                alert("enter valid QTY field");
                location.replace("sales_return.php");
            </script>
<?php
            return false;
        } else {
        }
    }

    $mainsql = "INSERT INTO returned_products(added_by,customer,invoice,memo,firm,date_time,all_totals)VALUES('$added_by','$customer','$invoice','$memo','$firm','$date_time','$all_totals')";
    $result = mysqli_query($conn, $mainsql);
    $lastid = $conn->insert_id;

    for ($j = 0; $j < $rowArr; $j++) {
        $sqlb = "INSERT INTO returned_product_var(purchase_row_id,prod_name,qty,sale_prize,total)VALUES('$lastid','$prod_name[$j]','$qty[$j]','$sale_prize[$j]','$total[$j]')";
        $result = mysqli_query($conn, $sqlb);

        $getpvdata = "SELECT * FROM `solded_prod_var` WHERE id='$updId[$j]'";
        $pvresult = mysqli_query($conn, $getpvdata);
        while ($pvres = mysqli_fetch_array($pvresult)) {
            $soldedQty = $pvres['sqty'];
            $variationId = $pvres['id'];
        }

        $subs = $soldedQty - $qty[$j];

        $updates = "UPDATE `solded_prod_var` SET `sqty`=$subs WHERE id='$updId[$j]'";
        $updresult = mysqli_query($conn, $updates);

        header("location:sales_return.php");
    }
}

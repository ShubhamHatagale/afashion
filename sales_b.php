<?php
session_start();
include("config.php");

if (isset($_POST['sale'])) {
    $added_by = $_SESSION['added_by'];
    $fid = $_POST['fid'];
   echo $invoice = $_POST['invoice'];
    $memo = $_POST['memo'];
    $date = $_POST['date'];
    $suppliers = $_POST['suppliers'];
    $allTotals = $_POST['allTotals'];

    $prod_nameB = $_POST['prod_nameB'];
    $sale_priceB = $_POST['sale_priceB'];
    $qtyinputB = $_POST['qtyinputB'];
    $totalB = $_POST['totalB'];
    $rigidAvailableProdB = $_POST['rigidAvailableProdB'];

    echo '<pre>';
    print_r($invoice);
    echo '</pre>';

    // echo '<pre>';
    // print_r($rigidAvailableProdB);
    // echo '</pre>';



    $vid = $_POST['vid'];
    $rowArr = sizeof($prod_nameB);

    for ($i = 0; $i < $rowArr; $i++) {
        if ($qtyinputB[$i] > $rigidAvailableProdB[$i]) {
?>
            <!-- <script>
                alert("enter valid QTY field");
                location.replace("sales.php");
            </script> -->
<?php
            return false;
        } else {
        }
    }

    $mainsql = "INSERT INTO solded_products(added_by,firm,invoice,memo,date_time,suppliers,all_totals)VALUES('$added_by','$fid','$invoice','$memo','$date','$suppliers','$allTotals')";
    $result = mysqli_query($conn, $mainsql);
    $lastid = $conn->insert_id;

    for ($j = 0; $j < $rowArr; $j++) {
        $sqlb = "INSERT INTO solded_prod_var(vid,purchase_row_id,prod_name,sale_prize,sqty,total)VALUES('$vid[$j]','$lastid','$prod_nameB[$j]','$sale_priceB[$j]','$qtyinputB[$j]','$totalB[$j]')";

        $result = mysqli_query($conn, $sqlb);

        $getpvdata = "SELECT * FROM `purchase_variations` WHERE id='$vid[$j]'";
        $pvresult = mysqli_query($conn, $getpvdata);
        while ($pvres = mysqli_fetch_array($pvresult)) {
            $variationQty = $pvres['qty'];
            $variationId = $pvres['id'];
        }

        $subs = $variationQty - $qtyinputB[$j];

        $updates = "UPDATE `purchase_variations` SET `qty`=$subs WHERE id='$vid[$j]'";
        $updresult = mysqli_query($conn, $updates);

        // header("location:reciept.php");
    }
}
?>

<!-- <script>
if(confirm("do you want to print")){

}
</script> -->


<!-- /* Retrieve values to update */
$qtyupdt = $pdo->query('
SELECT tb.id, (tb.qty - tbl.sqty) n
FROM purchase_variations tb
LEFT JOIN solded_prod_var tbl ON (tbl.vid = tb.id)');

/* Update */
foreach ($qtyupdt as $row)
$pdo->query('UPDATE purchase_variations SET qty = ' . (int)$row['n'] . ' WHERE id = ' . (int)$row['id'] . ' LIMIT 1'); -->
<?php
include 'config.php';

$idf = $_POST['idf'];

$selectquery = "select * from main_purchase where fid='$idf' ";
$query = mysqli_query($conn, $selectquery);
while ($row1 = mysqli_fetch_array($query)) {
    $main_p_id = $row1['id'];
    $fid = $row1['fid'];
    $invoice = $row1['invoice'];
    $suppliers = $row1['suppliers'];

    $selectquery1 = "select * from purchase_rows where purchase_row_id='$main_p_id'";
    $query1 = mysqli_query($conn, $selectquery1);
    while ($row2 = mysqli_fetch_array($query1)) {
        $purchase_row_id = $row2['id'];
        $prodCode = $row2['prod_code'];
        $prod_name = $row2['prod_name'];
        $purchase_price = $row2['purchase_price'];
        $sale_price = $row2['sale_price'];

        $selectquery2 = "select * from purchase_variations where purchase_row_id='$purchase_row_id'";
        $query2 = mysqli_query($conn, $selectquery2);
        while ($row3 = mysqli_fetch_array($query2)) {
            $colorId = $row3['colorId'];
            $sizeId = $row3['sizeId'];
            $qty = $row3['qty'];
            $varid = $row3['id'];
?>

            <option value="<?php echo $varid; ?> <?php echo $prodCode; ?> <?php echo $prod_name; ?> <?php echo $colorId; ?> <?php echo $sizeId; ?> <?php echo $qty; ?>"> <?php echo $prodCode; ?> <?php echo $prod_name; ?> <?php echo $colorId; ?> <?php echo $sizeId; ?> <?php echo $qty; ?></option>
<?php
        }
    }
}

?>
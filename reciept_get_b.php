<?php

include 'config.php';

$id = $_POST['id'];
$count = $_POST['count'];

$selectquery1 = "select * from purchase_variations where id='$id'";
$query1 = mysqli_query($conn, $selectquery1);
$nums1 = mysqli_num_rows($query1);
while ($res1 = mysqli_fetch_array($query1)) {
    $colorId = $res1['colorId'];
    $sizeId = $res1['sizeId'];
    $qty = $res1['qty'];
    $purchase_row_id = $res1['purchase_row_id'];
    $vid = $res1['id'];

    $selectquery = "select * from purchase_rows where id='$purchase_row_id'";
    $query = mysqli_query($conn, $selectquery);
    $nums = mysqli_num_rows($query);

    while ($res = mysqli_fetch_array($query)) {
        $prod_name = $res['prod_name'];
        $prod_code = $res['prod_code'];
        $sale_price = $res['sale_price'];
        // $uid = $res['id'];
    }
}

?>
<tr id='rowc<?php echo $count ?>'>
    <input type='hidden' id="prod_nameB" name='prod_nameB[]' value="<?php echo $prod_code ?> <?php echo $prod_name; ?> <?php echo $colorId ?> <?php echo $sizeId ?> <?php echo $qty ?>" />
    <input type='hidden' id="availableProdB" name='availableProdB[]' value="<?php echo $qty; ?>" readonly />
    <!-- <input type="hidden" class="form-control" id="vid<?php echo $count ?>" name="vid[]" value="<?php echo $vid ?>" readonly > -->

    <td><input type="hidden" class="form-control" id="vid<?php echo $count ?>" name="vid[]" value="<?php echo $vid ?>" readonly></td>
    <td class="col-lg-8"> <?php echo $prod_code ?> <?php echo $prod_name; ?> <?php echo $colorId ?> <?php echo $sizeId ?> </td>
    <td class="col-sm-2"><input type='number' id="availableProdB<?php echo $count ?>" name='availableProdB[]' value="<?php echo $qty ?>" readonly="true">
    </td>
    <td class="col-sm-2"><input type="number" class="form-control" id="qtyinputB<?php echo $count ?>" name="qtyinputB[]" onchange="inputChange()" value="0"></td>
    <td class="col-sm-2"><input type='number' id="sale_priceB<?php echo $count ?>" name='sale_priceB[]' value="<?php echo $sale_price ?>"></td>
    <td class="col-sm-2"><input type='number' id="totalB<?php echo $count ?>" name='totalB[]' value="0" readonly></td>
</tr>
<?php

?>
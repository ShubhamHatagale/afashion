<?php

include 'config.php';

$varid = $_POST['varid'];
$prodCode = $_POST['prodCode'];
$prod_qty = $_POST['prod_qty'];
$prod_name = $_POST['prod_name'];

$selectquery = "select * from purchase_variations where purchase_row_id='$varid'";
$query = mysqli_query($conn, $selectquery);

// where purchase_row_id='$id'
// $nums = mysqli_num_rows($query);

// $res = mysqli_fetch_array($query);
// echo $prodCode;

?>

<p>Product Code:-<?php echo $prodCode; ?></p>                  
<p>Product Qty:-<?php echo $prod_qty; ?></p>
<p>Product Name:-<?php echo $prod_name; ?></p>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <th>Sr No.</th> -->
            <th>Material Colour</th>
            <th>Material Size</th>
            <th>Material QTY</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (mysqli_num_rows($query) > 0) {
            while ($res = mysqli_fetch_array($query)) {

        ?>
                <tr>
                    <!-- <td><?php echo $res['purchase_row_id']; ?></td> -->
                    <td><?php echo $res['colorId']; ?></td>
                    <td><?php echo $res['sizeId']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>

    </tbody>
</table>
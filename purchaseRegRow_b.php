<?php

include 'config.php';

$id = $_POST['id'];

$selectquery = "select * from purchase_rows where purchase_row_id='$id'";

$query = mysqli_query($conn, $selectquery);

?>
<table class="table table-responsive table-bordered table-striped">
    <thead>
        <tr>
            <th>Sr No.</th>
            <!-- <th>Bill No.</th> -->
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product QTY</th>
            <th>Purchase Price</th>
            <th>Sale Price</th>
            <th>Total</th>
            <th>View</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (mysqli_num_rows($query) > 0) {
            while ($res = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['prod_code']; ?></td>
                    <td><?php echo $res['prod_name']; ?></td>
                    <td><?php echo $res['prod_qty']; ?></td>
                    <td><?php echo $res['purchase_price']; ?></td>
                    <td><?php echo $res['sale_price']; ?></td>
                    <td><?php echo $res['total']; ?></td>
                    <td>
                        <center> <button type="button" class="btn btn-success" onclick="variModel(<?php echo $res['id']; ?>,<?php echo $res['prod_code']; ?>,<?php echo $res['prod_qty']; ?>,'<?php echo $res['prod_name']; ?>')">view</button></center>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </tbody>
</table>
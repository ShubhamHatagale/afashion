<?php

include 'config.php';

$id = $_POST['id'];

$selectquery = "select * from returned_product_var where purchase_row_id='$id'";

$query = mysqli_query($conn, $selectquery);

?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <th>Sr No.</th> -->
            <th>Product Name</th>
            <th>Product QTY</th>
            <th>Sale Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (mysqli_num_rows($query) > 0) {
            while ($res = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <!-- <td><?php echo $res['id']; ?></td> -->
                    <td><?php echo $res['prod_name']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                    <td><?php echo $res['sale_prize']; ?></td>
                    <td><?php echo $res['total']; ?></td>
                   
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </tbody>
</table>
<?php

include 'config.php';

$id = $_POST['id'];

$selectquery = "select * from stock_transfer_variation where transfer_row_id='$id'";

$query = mysqli_query($conn, $selectquery);

?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <th>Sr No.</th> -->
            <th>Product Name</th>
            <th>Product QTY</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (mysqli_num_rows($query) > 0) {
            while ($res = mysqli_fetch_array($query)) {
        ?>
                <tr>
                    <td><?php echo $res['prod_name']; ?></td>
                    <td><?php echo $res['qty']; ?></td>
                    <!-- <td>
                        <center> <button type="button" class="btn btn-success" onclick="variModel(<?php echo $res['id']; ?>,<?php echo $res['prod_code']; ?>,<?php echo $res['prod_qty']; ?>,'<?php echo $res['prod_name']; ?>')">view</button></center>
                    </td> -->
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </tbody>
</table>
<?php

include 'config.php';
$id = $_POST['id'];

$selectquery1 = "select * from solded_products where invoice='$id'";
$query1 = mysqli_query($conn, $selectquery1);
$nums1 = mysqli_num_rows($query1);


while ($res1 = mysqli_fetch_array($query1)) {
    $date_time = $res1['date_time'];
    $all_totals = $res1['all_totals'];
    $purchId = $res1['id'];
    $firm = $res1['firm'];
    $memo = $res1['memo'];
    $suppliers = $res1['suppliers'];
    $invoice = $res1['invoice'];
}

?>
<!-- <h1><?php echo $date_time ?></h1> -->
<div class="card-body form-row">

    <div class="form-group col-md-2">
        <label for="inputEmail4">Customer Name</label>
        <input type="text" class="form-control" id="customer" name="customer" placeholder="customer name." value="<?php echo $suppliers ?>" disabled>
    </div>
    <div class="form-group col-md-2">
        <label for="inputEmail4">Invoice Number</label>
        <input type="text" class="form-control" id="invoice" name="invoice" placeholder="invoice no." value="<?php echo $invoice ?>" disabled>
    </div>

    <div class="form-group col-md-2">
        <label for="inputEmail4">Memo Number</label>
        <input type="text" class="form-control" id="memo" name="memo" placeholder="memo no." value="<?php echo $memo ?>" disabled>
    </div>

    <div class="form-group col-md-2">
        <label for="inputEmail4">Firm Name</label>
        <input type="text" class="form-control" id="firm" name="firm" placeholder="firm Name." value="<?php echo $firm ?>" disabled>
    </div>

    <div class="form-group  col-md-2">
        <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input type="date" id="date" name="date" placeholder="MM/DD/YYY" type="text" class="form-control" value="<?php echo $date_time ?>" disabled />
    </div>



    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <!-- <th>Product Code</th>
                                            <th class="right">Colour</th>
                                            <th class="right">Size</th> -->
                <th class="right">Price</th>
                <th class="center">Qty</th>
                <th class="right">Total</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $selectquery = "select * from solded_prod_var where purchase_row_id='$purchId'";
            $query = mysqli_query($conn, $selectquery);
            $nums = mysqli_num_rows($query);

            while ($res = mysqli_fetch_array($query)) {
                $prod_name = $res['prod_name'];
                $sale_prize = $res['sale_prize'];
                $sqty = $res['sqty'];
                $total = $res['total'];
                $updId = $res['id'];

            ?>
                <tr>
                    <!-- <td><input type="text" class="form-control" id="customer" name="customer" placeholder="customer name." value="<?php echo $prod_name ?>" disabled></td> -->
                    <input type='hidden' id="customer" name="customer" value="<?php echo $suppliers ?>">
                    <input type='hidden' id="invoice" name="invoice" value="<?php echo $invoice ?>">
                    <input type='hidden' id="firm" name="firm" value="<?php echo $firm ?>">
                    <input type='hidden' id="date_time" name="date_time" value="<?php echo $date_time ?>">
                    <input type='hidden' id="memo" name="memo" value="<?php echo $memo ?>">
                    <input type='hidden' id="all_totals" name="all_totals" value="<?php echo $all_totals ?>">

                    <input type='hidden' id="prod_name" name="prod_name[]" value="<?php echo $prod_name ?>">
                    <input type='hidden' id="sale_prize" name="sale_prize[]" value="<?php echo $sale_prize ?>">
                    <input type='hidden' id="total" name="total[]" value="<?php echo $total ?>">
                    <input type='hidden' id="updId" name="updId[]" value="<?php echo $updId ?>">
                    <input type='hidden' id="qtyRigid" name="qtyRigid[]" value="<?php echo $sqty ?>">

                    <td><?php echo $prod_name ?></td>
                    <td><?php echo $sale_prize ?></td>
                    <td><input type='number' id="qty" name="qty[]" onchange="qtyValidation(this)" value="<?php echo $sqty ?>"></td>
                    <td><?php echo $total ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
<div class="row">
    <div class="col-lg-4 col-sm-5">
    </div>
    <div class="col-lg-4 col-sm-5 ml-auto">
        <table class="table table-clear">
            <tbody>
                <tr>
                    <td class="left">
                        <strong class="text-dark">Total</strong>
                    </td>
                    <td class="right">
                        <strong class="text-dark"><?php echo $all_totals ?></strong>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
// const qtyValidation=(num)=>{
//     alert(num.value);
// }


// var qty = document.getElementById("qty").value;
// var jArray = <?php echo json_encode($sqty); ?>;


// for(var i=0; i<jArray.length; i++){
//     alert(jArray[0]);
// }

</script>
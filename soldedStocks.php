<?php
session_start();
if ($_SESSION['added_by']) {
    // echo 'welcome'.$_SESSION['added_by'];
} else {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Solded Stocks</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php
    include("scripts.php");

    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php
    include("sidebar.php");
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <?php
                        include 'config.php';

                        $selectquery = "select * from admin";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        $res = mysqli_fetch_array($query);

                        ?>
                        <h1 class="m-0 text-dark">Solded Stocks</h1>
                        <?php

                        ?>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="firms.php">Home</a></li>
                            <li class="breadcrumb-item active">Firm</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Firm master Register page -->
                <div class="row">
                    <div class="container-fluid">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><b>Solded Stocks</b></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <!-- <th>Product Code</th> -->
                                                    <th>Product Name</th>
                                                    <th>Firm Name</th>
                                                    <th>Invoice No.</th>
                                                    <th>Memo No.</th>
                                                    <th>Date</th>
                                                    <th>Customer name</th>
                                                    <th>Sale Price</th>
                                                    <th>QTY</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include 'config.php';

                                                $selectquery = "select * from solded_products";
                                                $query = mysqli_query($conn, $selectquery);
                                                while ($row1 = mysqli_fetch_array($query)) {
                                                    $main_p_id = $row1['id'];
                                                    $firms = $row1['firm'];
                                                    $invoice = $row1['invoice'];
                                                    $memo = $row1['memo'];
                                                    $date_time = $row1['date_time'];
                                                    $customers = $row1['suppliers'];
                                                    $total = $row1['total'];

                                                    $selectquery2 = "select * from solded_prod_var where purchase_row_id='$main_p_id'";
                                                    $query2 = mysqli_query($conn, $selectquery2);
                                                    while ($row3 = mysqli_fetch_array($query2)) {
                                                        $sr = $row3['id'];
                                                        $prod_name = $row3['prod_name'];
                                                        $sale_prize = $row3['sale_prize'];
                                                        $sqty = $row3['sqty'];
                                                        $total = $row3['total'];

                                                ?>
                                                        <tr>
                                                            <td><?php echo $sr; ?></td>
                                                            <td><?php echo $prod_name; ?></td>
                                                            <td><?php echo $firms; ?></td>
                                                            <td><?php echo $invoice; ?></td>
                                                            <td><?php echo $memo; ?></td>
                                                            <td><?php echo $date_time; ?></td>
                                                            <td><?php echo $customers; ?></td>
                                                            <td><?php echo $sale_prize; ?></td>
                                                            <td><?php echo $sqty; ?></td>
                                                            <td><?php echo $total; ?></td>

                                                        </tr>
                                                <?php
                                                    }
                                                }

                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>

<script>
    const view = (id) => {
        $.ajax({
            url: 'purchaseRegRow_b.php',
            method: 'POST',
            data: {
                id: id
            },
            success: function(responsedata) {
                $('#tableid').html(responsedata);
                $("#rowModal").modal("show");
            }
        })
        // alert(id);
    }


    function variModel(varid, prodCode, prod_qty, prod_name) {
        // alert(prod_name);
        $("#variationModal").modal("show");
        $.ajax({
            url: 'purchaseRegVariations_b.php',
            method: 'POST',
            data: {
                varid: varid,
                prodCode: prodCode,
                prod_qty: prod_qty,
                prod_name: prod_name,

            },
            success: function(variationResponsedata) {
                $('#variationResponse').html(variationResponsedata);
            }
        })
    }
</script>
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
    <title>Sales Register</title>
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
                        <h1 class="m-0 text-dark">Sales Register</h1>
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
                                        <h3 class="card-title"><b>Sales Register</b></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Firm Name</th>
                                                    <th>Invoice Number</th>
                                                    <th>Memo Number</th>
                                                    <th>Date</th>
                                                    <th>Customer name</th>
                                                    <th>Total</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include 'config.php';

                                                $selectquery = "select * from solded_products";

                                                $query = mysqli_query($conn, $selectquery);

                                                $nums = mysqli_num_rows($query);

                                                // $res = mysqli_fetch_array($query);

                                                while ($res = mysqli_fetch_array($query)) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $res['id']; ?></td>
                                                        <td><?php echo $res['firm']; ?></td>
                                                        <td><?php echo $res['invoice']; ?></td>
                                                        <td><?php echo $res['memo']; ?></td>
                                                        <td><?php echo $res['date_time']; ?></td>
                                                        <td><?php echo $res['suppliers']; ?></td>
                                                        <td><?php echo $res['all_totals']; ?></td>

                                                        <td>
                                                            <center> <button type="button" class="btn btn-success" onclick="view(<?php echo $res['id']; ?>)">view</button></center>
                                                        </td>
                                                    </tr>
                                                <?php
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

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="rowModal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="tableid">

                </div>
            </div>
        </div>
    </div>
    <!-- new ended model -->

    <!-- this code for modal of adding variations data-backdrop="static" -->

    <div class="modal fade bd-example-modal-lg" id="variationModal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="variationResponse">

                </div>
            </div>
        </div>
    </div>

   
    <!-- ended code for modal of adding variations -->

    <script>
        const view = (id) => {
            $.ajax({
                url: 'salesRegRow_b.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(responsedata) {
                    $('#tableid').html(responsedata);
                    $("#rowModal").modal("show");
                }
            })
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

</body>

</html>
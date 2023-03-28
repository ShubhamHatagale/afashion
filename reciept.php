<?php
// session_start();
// if ($_SESSION['added_by']) {
//     // echo 'welcome'.$_SESSION['added_by'];
// } else {
//     header("location:index.php");
// }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Purchase</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php
    include("scripts.php");
    ?>
    <!-- <script src="purchase.js"></script> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed" onload="window.print();">
    <?php
    // include("sidebar.php");
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">

            <div class="card-body">

                <div class="table-responsive-sm">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th class="right">Colour</th>
                                <th class="right">Size</th>
                                <th class="right">Price</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config.php';

                            // $selectquery = "select * from main_purchase";
                            // $query = mysqli_query($conn, $selectquery);
                            // echo $nums = mysqli_num_rows($query);

                            // while ($row1 = mysqli_fetch_array($query)) {
                            //     $main_p_id = $row1['id'];
                            //     $fid = $row1['fid'];
                            //     $invoice = $row1['invoice'];
                            //     $suppliers = $row1['suppliers'];

                            $selectquery1 = "select * from solded_products";
                            $query1 = mysqli_query($conn, $selectquery1);
                            $nums1 = mysqli_num_rows($query1);

                            while ($row2 = mysqli_fetch_array($query1)) {
                                $purchase_row_id = $row2['id'];
                                $invoice = $row2['invoice'];
                                $all_totals = $row2['all_totals'];
                            }

                            $selectquery2 = "select * from solded_prod_var where purchase_row_id='$nums1'";
                            $query2 = mysqli_query($conn, $selectquery2);
                            ?>

                            <div class="card-header p-4">
                                <a class="pt-2 d-inline-block" href="index.html" data-abc="true">afashion.co.in</a>
                                <div class="float-right">
                                    <h3 class="mb-0">Inv :-<?php echo $invoice; ?></h3>
                                    <?php echo $timezone = date("F j, Y");  ?>
                                </div>
                            </div>

                            <?php
                            while ($row3 = mysqli_fetch_array($query2)) {
                                $prod_name = $row3['prod_name'];
                                $sizeId = $row3['sizeId'];
                                $sale_prize = $row3['sale_prize'];
                                $total = $row3['total'];

                                $qty = $row3['sqty'];
                                $varid = $row3['id'];
                            ?>


                                <tr>
                                    <td><?php echo $prod_name; ?></td>
                                    <td><?php echo $prodCode; ?></td>

                                    <td><?php echo $colorId; ?></td>
                                    <td><?php echo $sizeId; ?></td>
                                    <td><?php echo $sale_prize; ?></td>
                                    <td><?php echo $qty; ?></td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                            <?php
                            }
                            // }


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
                                        <strong class="text-dark"><?php echo $all_totals; ?></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p class="mb-0"><b>Address:- </b>11 A B, Shastri Shopping Center,Navi Peth,Solapur. ph:- 2622212 </p>
            </div>
        </div>
    </div>



</body>

</html>
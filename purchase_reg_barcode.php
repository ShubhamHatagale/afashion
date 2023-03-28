<html>

<head>

    <title>Product Variations</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php
    include("scripts.php");
    ?>
    <style>
        p.inline {
            display: inline-block;
        }

        span {
            font-size: 13px;
        }
    </style>
    <style type="text/css" media="print">
        @page {
            size: auto;
            /* auto is the initial value */
            margin: 0mm;
            /* this affects the margin in the printer settings */

        }
    </style>

</head>

<body>
    <!-- onload="window.print();" -->
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
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <!-- <li><b href="firms.php">Product Variations</b></li> -->
                        </ol>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="firms.php">Home</a></li>
                            <li class="breadcrumb-item active">Firm</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="container-fluid">
            <form class="" role="form" method="POST" action="barcode_generate.php" enctype="multipart/form-data">
                <div style="margin-left: 5%">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Colour</th>
                                <th>Size</th>
                                <th>Qty</th>
                                <!-- <th>Barcode</th> -->
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include 'barcode128.php';
                            // $product_id = 'hatagaleknowsit';

                            include 'config.php';

                            $Mainid = $_GET['Mainid'];
                            $selectquery = "select * from purchase_rows where purchase_row_id='$Mainid'";
                            $query = mysqli_query($conn, $selectquery);
                            while ($res = mysqli_fetch_array($query)) {
                                $rowId = $res['id'];
                                $prod_Qty = $res['prod_qty'];
                                $prod_name = $res['prod_name'];
                                $sale_price = $res['sale_price'];
                                $prod_code = $res['prod_code'];

                                // echo $prod_name;
                            ?>
                                <!-- <?php echo $rowId; ?>
    <?php echo $prod_Qty; ?>
    <?php echo $prod_name; ?> -->

                                <?php

                                $subGetVar = "SELECT * FROM `purchase_variations` WHERE purchase_row_id='$rowId'";

                                $subGetVarResult = mysqli_query($conn, $subGetVar);
                                $subVarCount = mysqli_num_rows($subGetVarResult);
                                while ($resvar = mysqli_fetch_array($subGetVarResult)) {
                                    $lastidRowvar = $resvar['id'];
                                    $variationSize = $resvar['sizeId'];
                                    $variationcolorId = $resvar['colorId'];
                                    $variationQty = $resvar['qty'];

                                    // for ($i = 0; $i < $variationQty[0]; $i++) {
                                ?>
                                    <!-- <h1> <?php echo $prod_name; ?></h1> -->
                                    <tr>
                                        <input type='hidden' id="VariationId" name="VariationId[]" value="<?php echo $lastidRowvar ?>">
                                        <input type='hidden' id="prodName" name="prodName[]" value="<?php echo $prod_name ?>">
                                        <input type='hidden' id="prodCode" name="prodCode[]" value="<?php echo $prod_code ?>">
                                        <input type='hidden' id="prodSize" name="prodSize[]" value="<?php echo $variationSize ?>">
                                        <input type='hidden' id="prodColor" name="prodColor[]" value="<?php echo $variationcolorId ?>">

                                        <td><?php echo $prod_name ?></td>
                                        <td><?php echo $prod_code ?></td>
                                        <td><?php echo $variationcolorId ?></td>
                                        <td><?php echo $variationSize ?></td>
                                        <!-- <td><?php echo $sale_price ?></td> -->
                                        <td><input type='number' class="form-control col-sm-4 " id="VariationQty" name="VariationQty[]" value="<?php echo $variationQty ?>"></td>
                                        <!-- <td>
                                            <center> <button type="submit" name="generateBarcode" class="btn btn-success" id="generateBarcode">Generate Barcodes</button></center>
                                        </td> -->

                                    </tr>
                            <?php

                                    // echo "<p class='inline'>" . bar128(stripcslashes($lastidRowvar)) . "</p></br>";
                                    // }
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <center> <button type="submit" name="generateBarcode" class="btn btn-success" id="generateBarcode">Print Barcodes</button></center>

            </form>
        </div>
    </div>
</body>

</html>
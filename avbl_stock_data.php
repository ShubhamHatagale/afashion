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
            <form class="" role="form" method="POST" action="purchase_reg_barcodePrint.php" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Products Barcode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="printingDivClass modal-body h-25 d-flex align-items-center justify-content-center" id="printingDiv ">
                        <div class="">
                            <?php
                            session_start();

                            include 'barcode128.php';

                            include("config.php");
                            $Mainid = $_GET['Mainid'];
                            $MainQty = $_GET['MainQty'];

                            $VariationId='shubhamvvv';    
                            ?>
                                    <?php
                                    echo "<p class='inl'>" . bar128(stripcslashes($Mainid));
                                    // echo $prodName[$i] . "" . $prodCode[$i]."".$prodSize[$i];
                                    // echo $prodName[$i];
                                    // echo $prodCode[$i];
                                    // echo $prodSize[$i];
                                    // echo $prodColor[$i]."<br>";
                                    echo "<span><b>www.afashion.co.in</b></span><br>";
                                    echo "<span><b>mob.9860769457</br></span>"

                                    ?>
                            <?php
                            ?>
                        </div>                       
                    </div>
                    <div class="card-body" style="margin-left: 19rem;">
                        <div class="" style="height:100px;">
                            <label class="control-label" for="date">Product Quantity</label>
                            <input type="hidden" class="form-control w-50" id="piid" name="piid" value="<?php echo $Mainid; ?>" placeholder="Product Quantity">
                            <input type="number" class="form-control w-50" id="pq" name="pq" value="<?php echo $MainQty; ?>" placeholder="Product Quantity">
                        </div>
                    </div>
                    <div class="card-body" style="float:right">
                            <button class="w-100 btn btn-success" onclick="submit()" type="button" >Print</button>
                            <!-- <center> <a href="purchase_reg_barcodePrint.php?Mainid=<?php echo $Mainid ?>" class="btn btn-success" >Print</a></center> -->
                            <!-- <center> <a href="purchase_reg_barcodePrint.php?Mainid=<?php echo $Mainid; ?>&MainQty=<?php echo $MainQty; ?>" onclick="submit()" class="btn btn-success">Print</a></center> -->

                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
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
    <title>Available Prducts</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <?php
    include("scripts.php");

    ?>

    <script type="text/javascript" src="JsBarcode.all.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php
    include("sidebar.php");
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="allContent">
        <!-- Content Header (Page header) -->
        <div class="content-header">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <span class="m-0 text-dark m-1"><b>Available Prducts</b></span>
                    </div><!-- /.col -->
                    <div class="col-sm-9">
                        <ol class="breadcrumb float-sm-right m-1">
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
                <div class="container-fluid card-body form-row ">

                    <div class=" col-md-3">
                        <label for="inputEmail4">Select Firm</label>
                        <!-- <select class="form-control" id="fid" onchange="firmFind()" name="fid"> -->

                        <input type="name" class="form-control" id="fid" onchange="firmFind()" name="fid" list="dataListId" placeholder="Search for firms.." title="Type in a name">
                        <datalist id="dataListId">
                            <?php
                            include 'config.php';

                            $selectquery = "select * from admin";

                            $query = mysqli_query($conn, $selectquery);

                            $nums = mysqli_num_rows($query);

                            while ($res = mysqli_fetch_array($query)) {

                            ?>
                                <option value="<?php echo $res['fname']; ?>"><?php echo $res['fname']; ?></option>
                            <?php
                            }
                            ?>
                        </datalist>
                        <!-- </select> -->
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4">Select Supplier</label>
                        <!-- <select class="form-control" id="sid" onchange="supplierFind()" name="suppliers"> -->
                        <input type="name" class="form-control" id="sid" onchange="supplierFind()" name="suppliers" list="dataListId2" placeholder="Search for suppliers.." title="Type in a name">
                        <datalist id="dataListId2">
                            <?php
                            include 'config.php';

                            $selectquery = "select * from suppliers";

                            $query = mysqli_query($conn, $selectquery);

                            $nums = mysqli_num_rows($query);

                            while ($res = mysqli_fetch_array($query)) {

                            ?>
                                <option value="<?php echo $res['fname']; ?>"><?php echo $res['fname']; ?></option>
                            <?php
                            }
                            ?>
                        </datalist>
                        <!-- </select> -->
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><b>Available Prducts</b></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>

                                            <th>Firm Name</th>
                                            <th>Invoice</th>
                                            <th>Supplier</th>

                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Product Colour</th>
                                            <th>Product Size</th>

                                            <th>QTY</th>
                                            <th>Purchase Price</th>
                                            <th>Sale Price</th>
                                            <th>Barcode</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        include 'config.php';

                                        $selectquery = "select * from main_purchase";
                                        $query = mysqli_query($conn, $selectquery);
                                        while ($row1 = mysqli_fetch_array($query)) {
                                            $main_p_id = $row1['id'];
                                            $fid = $row1['fid'];
                                            $invoice = $row1['invoice'];
                                            $suppliers = $row1['suppliers'];

                                            $selectquery1 = "select * from purchase_rows where purchase_row_id='$main_p_id'";
                                            $query1 = mysqli_query($conn, $selectquery1);
                                            while ($row2 = mysqli_fetch_array($query1)) {
                                                $purchase_row_id = $row2['id'];
                                                $prodCode = $row2['prod_code'];
                                                $prod_name = $row2['prod_name'];
                                                $purchase_price = $row2['purchase_price'];
                                                $sale_price = $row2['sale_price'];

                                                $selectquery2 = "select * from purchase_variations where purchase_row_id='$purchase_row_id'";
                                                $query2 = mysqli_query($conn, $selectquery2);
                                                while ($row3 = mysqli_fetch_array($query2)) {
                                                    $colorId = $row3['colorId'];
                                                    $sizeId = $row3['sizeId'];
                                                    $qty = $row3['qty'];
                                                    $varid = $row3['id'];

                                        ?>
                                                    <tr>
                                                        <td><?php echo $varid; ?></td>

                                                        <td><?php echo $fid; ?></td>
                                                        <td><?php echo $invoice; ?></td>
                                                        <td><?php echo $suppliers; ?></td>

                                                        <td><?php echo $prodCode; ?></td>
                                                        <td><?php echo $prod_name; ?></td>
                                                        <td><?php echo $colorId; ?></td>
                                                        <td><?php echo $sizeId; ?></td>

                                                        <td><?php echo $qty; ?></td>
                                                        <td><?php echo $purchase_price; ?></td>
                                                        <td><?php echo $sale_price; ?></td>
                                                        <!-- <td><button type="button" class="btn btn-success" onclick="barcode(<?php echo $varid; ?>,<?php echo $prodCode; ?>,'<?php echo $prod_name; ?>','<?php echo $colorId; ?>','<?php echo $sizeId; ?>',<?php echo $qty; ?>)">Barcode</button></td> -->
                                                        <td>
                                                            <center> <a href="avbl_stock_data.php?Mainid=<?php echo $varid; ?>&MainQty=<?php echo $qty; ?>" class="btn btn-success">Barcode Generate</a></center>
                                                        </td>
                                                        <!-- <center> <a href="purchase_reg_barcode.php?Mainid=<?php echo $res['id']; ?>" class="btn btn-success">Barcode Generate</a></center> -->

                                                    </tr>
                                        <?php
                                                }
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
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="rowModal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Available Prducts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="printingDivClass modal-body h-25" id="printingDiv">
                    <div class="text-center">
                        <svg id="barcode"></svg>
                    </div>
                    <div class="text-center">
                        <span class="font-weight-bold">www.afashion.co.in</span>
                    </div>
                    <div class="text-center">
                        <span class="font-weight-bold">mob.9860769457</span>
                    </div>
                </div>
                <div class="card-body justify-center align-items-center text-center" style="margin-left: 16rem;">
                    <div class="w-50 align-items-center" style="height:100px;">
                        <label class="control-label" for="date">Product Quantity</label>
                        <input type="number" class="form-control" id="pq" name="pq" placeholder="Product Quantity">
                    </div>
                </div>
                <div class="card-body justify-center align-items-center text-center" style="margin-left: 16rem;">
                    <div class="w-50 align-items-center">
                        <button type="button" class="btn btn-success" onclick="printFunction('printingDiv')">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- new ended model -->
</body>

</html>

<script>
    const printFunction = (divid) => {

        pq = document.getElementById("pq").value;
        document.getElementById("allContent").style.display = "none";
        // document.getElementById("rowModal").style.display = "none";
        $("#rowModal").modal("hide");

        var box = document.getElementById(divid);
        console.log(box);
        for (let x = 0; x < pq; x++) {
            let cln = box.cloneNode(true);
            document.body.appendChild(cln)

        }
        print();
        location.reload();

    }


    function barcode(id, pc, pn, pCol, pSize, pqnty) {
        // for (i = 1; i <= 10; i++) {
        // alert(id);
        console.log(id, pc, pn, pCol, pSize);
        // alert(pqnty);
        document.getElementById("pq").value = pqnty;
        $("#rowModal").modal("show");

        JsBarcode("#barcode", id, {
            text: pc + " " + pn + " " + pCol + " " + pSize,
            width: 1,
            height: 40,
            // marginLeft: 30,
            marginTop: 50,
            // background: "#ccffff",
            displayValue: true,
        });

    }

    function firmFind() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("fid");
        filter = input.value.toUpperCase();
        table = document.getElementById("example1");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function supplierFind() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("sid");
        filter = input.value.toUpperCase();
        table = document.getElementById("example1");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

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
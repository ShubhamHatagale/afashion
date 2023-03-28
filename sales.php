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
                        <h1 class="m-0 text-dark">Material Sale</h1>
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

        <!-- this code for adding customer model -->
        <div class="modal fade bd-example-modal-lg" id="variationModal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="staticBackdropLabel">Add a new customer</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="variationResponse">
                        <div class="row">
                            <div class="container-fluid">
                                <form class="" role="form" method="POST" action="salesAdd_customer.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2" class="control-label">Name :</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter  name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exampleInputPassword2" class="control-label ">Contact :</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="cont" name="contact" placeholder="Enter Contact" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:15px">
                                        <div class="col-md-6">
                                            <center> <button type="submit" class="btn btn-success ph-100" name="submit" id="submit" tabindex="14">Add Customer</button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ended customer model -->
        <!-- Main content -->


        <section class="content">
            <div class="container-fluid">
                <form class="" role="form" method="POST" action="sales_b.php" name="forms" id="formid" enctype="multipart/form-data">
                    <!-- Firm master Register page -->
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card form-row">
                                <div class="card-header">
                                    Add Sale
                                </div>
                                <div class="card-body form-row">
                                    <div class="col-md-2">
                                        <label for="inputEmail4">Select Firm</label>
                                        <!-- <select class="form-control" id="fid" name="fid"> -->
                                        <input type="name" class="form-control" id="sid" name="suppliers" list="dataListId3" placeholder="Search for customer.." title="Type in a name">
                                        <datalist id="dataListId3">

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
                                            </dataListId3>
                                    </div>

                                    <div class="form-group col-md-2">

                                    <?php
                                            include 'config.php';

                                            $selectquerysp = "select * from solded_products";

                                            $querysp = mysqli_query($conn, $selectquerysp);

                                            $numssp = mysqli_num_rows($querysp);

                                            while ($ressp = mysqli_fetch_array($querysp)) {
                                                 $inv=$ressp['id']+1;
                                            }
                                            ?>
                                            
                                        <label for="inputEmail4">Invoice Number</label>
                                        <input type="text" class="form-control" id="invoice" name="invoice" value="<?php echo $inv?>" placeholder="invoice no." readonly="true">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Memo Number</label>
                                        <input type="text" class="form-control" id="memo" name="memo" placeholder="memo no." required>
                                    </div>


                                    <div class="form-group  col-md-2">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Date</label>
                                        <input type="date" id="date" name="date" placeholder="MM/DD/YYY" type="text" class="form-control" required />
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputEmail4">Select Customer</label>
                                        <!-- <select class="form-control" name="suppliers" id="sid"> -->
                                        <input type="name" class="form-control" id="sid" name="suppliers" list="dataListId2" placeholder="Search for customer.." title="Type in a name">
                                        <datalist id="dataListId2">
                                            <?php
                                            include 'config.php';

                                            $selectquery = "select * from customers";

                                            $query = mysqli_query($conn, $selectquery);

                                            $nums = mysqli_num_rows($query);

                                            while ($res = mysqli_fetch_array($query)) {

                                            ?>
                                                <option value="<?php echo $res['fname']; ?>"><?php echo $res['fname']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </datalist>

                                    </div>
                                    <div class="col-md-2">
                                        <label class="control-label" for="date">&nbsp;</label>
                                        <center> <button type="button" name="addCustomer" onclick="addCustomer()" class="btn btn-success" id="addCustomer">+</button></center>
                                    </div>
                                </div>
                            </div>

                            <div class="card form-row">
                                <div class="card-header">
                                    Product Add
                                </div>
                                <span class="text-center text-danger" id="addRowError">require fields are missing</span>
                                <div class="card-body form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Product Name</label>
                                        <input type="name" class="form-control" onchange="addRow(this)" id="product_name" list="dataListId" placeholder="Search for names.." title="Type in a name">
                                        <datalist id="dataListId">
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

                                                        <option value="<?php echo $varid; ?> <?php echo $prodCode; ?> <?php echo $prod_name; ?> <?php echo $colorId; ?> <?php echo $sizeId; ?> <?php echo $qty; ?>">
                                                            <?php echo $prodCode[0]; ?><?php echo $prod_name[0]; ?><?php echo $colorId[0]; ?><?php echo $sizeId[0]; ?><?php echo $qty; ?></option>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </datalist>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="card form-row" id="cardRow">
                            <div class="card-header">
                                Added Products
                            </div>
                            <!-- <div class="container-fluid"> -->
                            <div class="row" style="margin-top: 20px">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <table class="table table-bordered table-striped" id="tableid">
                                                <thead>
                                                    <tr>
                                                        <th style="visibility: hidden;">Sr No.</th>
                                                        <th>Product Name</th>
                                                        <th>Available Products</th>
                                                        <th>Product QTY</th>
                                                        <th>Sale Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body form-row float-right ">
                        <div class="col-md-3">
                            <label for="label">Total</label>
                            <input type="number" class="form-control" id="allTotals" name="allTotals" value="0" readonly="true">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4">&nbsp;</label>
                            <center> <button type="submit" name="sale" class="btn btn-success" id="sale">Sale</button></center>
                        </div>
                    </div>

                    <!-- ended code for modal of adding variations -->
                    <input type="hidden" id="rowid" value="1" />
                    <input type="hidden" id="modrowid" name="modrowid" value="1" />
                    <input type="hidden" id="availableProdB" name="availableProdB" value="0" />

                </form>
            </div>
        </section>
    </div>


</body>

</html>


<script>

    document.getElementById("date").valueAsDate = new Date();

    $(document).ready(function() {
        $("#cardRow").hide();
        $("#addRowError").hide();
        // $("#date").datepicker().datepicker("setDate", new Date());

        $("#sale").click(function() {

            $("#rowModal").modal("show");

            var fid = $('#fid').val();
            var invoice = $('#invoice').val();
            var memo = $('#memo').val();
            var date = $('#date').val();
            var sid = $('#sid').val();

            var qtys = parseInt($('#qtyinputB' + i).val());
            var avP = parseInt($('#availableProdB' + i).val());

            // alert(qtyq);
            // alert("qtyinput" + qtyinput);

            if (fid == "" || invoice == "" || memo == "" || date == "" || sid == "" || qtys == "0") {
                alert('fill the blank');
                return false;
            } else if (qtys > avP || qtys == "") {
                alert('qty error');
                return false;
            } else {
                $('#formid').submit();
                location.replace('reciept.php');
            }

        });

        $("#addCustomer").click(function() {
            $("#variationModal").modal("show");
        });

    });



    function inputChange() {
        // alert("yooyoyoy");
        var tbl = document.getElementById("tableid");
        var mcount = tbl.rows.length - 1;
        var qtys = 0;
        var sellPrice = 0;
        var totals = 0;
        let allTotal = 0;

        // alert(mcount);
        // console.log(i + "=" + 0 + ";" + i + "<" + mcount + ";" + i++);
        for (i = 0; i < mcount; i++) {
            // tt = parseInt($('#totals' + i).val());
            qtys = parseInt($('#qtyinputB' + i).val());
            sellPrice = parseInt($('#sale_priceB' + i).val());

            avP = parseInt($('#availableProdB' + i).val());
            if (qtys > avP) {
                qtys = "";
                // $('#qtyinputB').val('');
                // alert("pleae enter the qty under available products");
            } else {
                // alert("success");
                // alert(sellPrice);
                totals = qtys * sellPrice;
                console.log(qtys + "*" + sellPrice);
                console.log(totals);

                document.getElementById("totalB" + i).value = totals;
                allTotal = allTotal + totals;
                console.log(allTotal);
            }
        }
        document.getElementById("allTotals").value = allTotal;
    }

    function clearData() {
        $("#modelTbody tr").remove();
        $("#myModal").modal("hide");
    }

    function save() {
        $("#myModal").modal("hide");
    }

    function addRow(id) {
        // var pname = $('#product_name').val();

        let product_name = document.getElementById("product_name").value;
        let rowid = parseInt(document.getElementById("rowid").value);

        // alert(id.value);
        let availableProdB = parseInt(document.getElementById("availableProdB").value);

        // alert(id.value);
        if (product_name == "") {
            $("#addRowError").show("fast");
        } else {
            $("#addRowError").hide("fast");
            $("#cardRow").show("slow");
            $.ajax({
                url: 'sales_get_b.php',
                method: 'POST',
                data: {
                    id: id.value,
                    count: availableProdB

                },
                success: function(responsedata) {
                    $('#tableid').append(responsedata);
                    document.getElementById("availableProdB").value = availableProdB + 1;
                    $('#product_name').val('');
                }

            })
        }

    }



    // add Variation Scripts----->>>>
    let mid;
    let prqty;




    function deleteModRow(modrowid) {
        $('#row_id' + modrowid).remove();
    }

    const rowDelete = (rowid) => {
        if (confirm("Are you sure you want to delete this row")) {
            $('#row' + rowid).remove();
        } else {
            close("You pressed Cancel!");
        }
    }
</script>
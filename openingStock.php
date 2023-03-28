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
                <div class="row">
                    <div class="col-sm-3">
                        <span class="m-0 text-dark m-1"><b>Opening Purchase</b></span>
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
                <form class="" role="form" method="POST" action="purchaseAdd_b.php" name="forms" id="formid" enctype="multipart/form-data">
                    <!-- Firm master Register page -->
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card form-row">
                                <div class="card-header">
                                    Add Purchase
                                </div>
                                <div class="card-body form-row">
                                    <div class="col-md-3">
                                        <label for="inputEmail4">Select Firm</label>
                                        <!-- <select class="form-control" id="fid" name="fid"> -->
                                        <input type="name" class="form-control" id="fid" onchange="supplierFind()" name="fid" list="dataListId2" placeholder="Search for Firms.." title="Type in a name">
                                        <datalist id="dataListId2">

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
                                    </div>
                                    <!-- <div class="form-group col-md-3">
                                        <label for="inputEmail4">Invoice Number</label>
                                        <input type="text" class="form-control" id="invoice" name="invoice" placeholder="invoice no." required>
                                    </div> -->

                                    <div class="form-group  col-md-3">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Date</label>
                                        <input type="date" id="date" name="date" placeholder="MM/DD/YYY" type="text" class="form-control" required />
                                    </div>
                                </div>
                            </div>


                            <div class="card form-row">
                                <div class="card-header">
                                    Product Add
                                </div>
                                <span class="text-center text-danger" id="addRowError">require fields are missing</span>
                                <div class="card-body form-row">
                                    <div class="col-md-2">
                                        <label for="inputEmail4">Product Code</label>
                                        <input type="text" class="form-control" name="prod_code" id="prod_code" placeholder="Product Code">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Product Name</label>
                                        <input type="text" class="form-control" name="prod_name" id="prod_name" placeholder="Product Name">
                                    </div>

                                    <div class="form-group  col-md-2">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Product Quantity</label>
                                        <input type="number" class="form-control" id="prod_qty" name="prod_qty" placeholder="Product Quantity">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputEmail4">Puchase Price</label>
                                        <input type="number" class="form-control" id="purchase_price" name="purchase_price" placeholder="Purchase Price">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputEmail4">Sale Price</label>
                                        <input type="number" class="form-control" id="sale_price" name="sale_price" placeholder="Sale Price">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputEmail4">&nbsp;</label>
                                        <center> <button type="button" class="btn btn-success" onclick="addRow()">Add</button></center>
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
                                        <!-- <div class="card-header">
                                            <h3 class="card-title"><b>Add Purchase</b></h3>
                                        </div> -->
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped" id="tableid">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <!-- <th>Bill No.</th> -->
                                                        <th>Product Code</th>
                                                        <th>Product Name</th>
                                                        <th>Product QTY</th>
                                                        <th>Purchase Price</th>
                                                        <th>Sale Price</th>
                                                        <th>Add Variation</th>
                                                        <th>Total</th>
                                                        <th>Delete</th>
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
                            <center> <button type="submit" name="submitAll" class="btn btn-success" id="submitAll">Submit All</button></center>
                        </div>
                    </div>

                    <!-- this code for modal of adding variations -->
                    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="card-body form-row">
                                    <div class="col-md-3">
                                        <label for="inputEmail4">Select Material Colour</label>
                                        <select class="form-control" id="colour_id" name="firms">
                                            <?php
                                            include 'config.php';

                                            $selectquery = "select * from colors";

                                            $query = mysqli_query($conn, $selectquery);

                                            $nums = mysqli_num_rows($query);

                                            while ($res = mysqli_fetch_array($query)) {

                                            ?>
                                                <option value="<?php echo $res['name'] ?>"><?php echo $res['name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputEmail4">Select Material Size</label>
                                        <select class="form-control" id="size_id" name="firms">
                                            <?php
                                            include 'config.php';

                                            $selectquery = "select * from sizes";

                                            $query = mysqli_query($conn, $selectquery);

                                            $nums = mysqli_num_rows($query);

                                            while ($res = mysqli_fetch_array($query)) {
                                            ?>
                                                <!-- <option value="0"></option> -->
                                                <option value="<?php echo $res['name'] ?>"><?php echo $res['name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Material Quantity</label>
                                        <input type="number" id="qty" class="form-control" name="Material Quantity" placeholder="Material Quantity.">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">&nbsp;</label>
                                        <center> <button type="button" id="modelAdd" name="modelAdd" class="btn btn-success">Add</button></center>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 p-3">
                                        <div class="card-header">
                                            <h3 class="card-title"><b>Added Variations</b></h3>
                                        </div>
                                        <table id="modTableid" border="2" style="width:100%">
                                            <thead></thead>
                                            <th>sr.no</th>
                                            <th>Colour</th>
                                            <th>Size</th>
                                            <th>QTY</th>
                                            <th>Delete</th>
                                            </thead>

                                            <tbody id="modelTbody">

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-body form-row" style="margin-left:16rem">
                                        <div class="col-md-4">
                                            <button type="button" id="modelSave" name="modelSave" class="btn btn-success" onclick="save()">Save</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" id="modelClose" name="modelClose" class="btn btn-danger" onclick="clearData()">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- ended code for modal of adding variations -->
                    <input type="hidden" id="rowid" value="1" />
                    <input type="hidden" id="modrowid" name="modrowid" value="1" />

                </form>
            </div>
        </section>
    </div>

    <script>

document.getElementById("date").valueAsDate = new Date();

        function clearData() {
            $("#modelTbody tr").remove();

            $("#myModal").modal("hide");

        }

        function save() {
            $("#myModal").modal("hide");
        }


        function addRow() {

            let prod_code = $('#prod_code').val();
            let prod_name = $('#prod_name').val();
            let prod_qty = $('#prod_qty').val();
            let purchase_price = $('#purchase_price').val();
            let sale_price = $('#sale_price').val();

            if (prod_code == "" || prod_name == "" || prod_qty == "" || purchase_price == "" || sale_price == "") {
                $("#addRowError").show("fast");
            } else {
                $("#addRowError").hide("fast");
                $("#cardRow").show("slow");

                let prod_code = document.getElementById("prod_code").value;
                let prod_name = document.getElementById("prod_name").value;
                // let invoice = document.getElementById("invoice").value;
                let prod_qty = parseInt(document.getElementById("prod_qty").value);
                let purchase_price = parseInt(
                    document.getElementById("purchase_price").value
                );
                let sale_price = parseInt(document.getElementById("sale_price").value);
                let total = prod_qty * purchase_price;
                let rowid = parseInt(document.getElementById("rowid").value);
                // let tableCount = document.getElementById("tableid");
                // let tableRow=tableCount.rows.length;
                // console.log(rowid)
                $("#tableid").append(
                    "<tr id='row" +
                    rowid +
                    "'><input type='hidden' name='rowid[]' value='" + rowid + "'/><td>" +
                    rowid +
                    "</td><input type='hidden' id='pcode' name='prod_code[]' value='" + prod_code + "'/ ><td>" +
                    prod_code +
                    "</td><input type='hidden' name='prod_name[]' value='" + prod_name + "'/><td>" +
                    prod_name +
                    "</td><input type='hidden' name='prod_qty[]' value='" + prod_qty + "'/> <td>" +
                    prod_qty +
                    "</td><input type='hidden' name='purchase_price[]' value='" + purchase_price + "'/><td>" +
                    purchase_price +
                    "</td><input type='hidden' name='sale_price[]' value='" + sale_price + "'/><td>" +
                    sale_price +
                    "</td><td><button type='button' class='deleteBtn btn btn-success' onclick='addVariation(" +
                    rowid + "," + prod_qty +
                    ")'>Add Variation</button></td><input type='hidden' name='total[]' value='" + total + "'/><td>" +
                    total +
                    "</td><td><button type='button' class='deleteBtn btn btn-danger' onclick='rowDelete(" + rowid + ")' >Delete</button></td></tr>"
                );
                rowid = rowid + 1;
                document.getElementById("rowid").value = rowid;
                // }
                let table = document.getElementById("tableid"),
                    sumVal = 0;
                for (let i = 1; i < table.rows.length; i++) {
                    sumVal = sumVal + parseInt(table.rows[i].cells[7].innerHTML);
                }
                document.getElementById("allTotals").value = sumVal;
            }
        }

        // add Variation Scripts----->>>>
        let mid;
        let prqty;

        function addVariation(rowid, prod_qty) {
            // alert(rowid);
            $("#myModal").modal("show");
            mid = rowid;
            prqty = prod_qty;
            var tbl = document.getElementById("modTableid");
            var mcount = tbl.rows.length - 1;
            // alert(mcount);
            let miiid;
            if (mcount > 0) {
                for (i = 1; i <= mcount; i++) {
                    // miiid is the id for every row added in variation
                    miiid = tbl.rows[i].cells[0].innerHTML;
                    // alert(miiid);

                    // console.log(rowid + " == " + miiid);
                    if (rowid == miiid) {
                        // alert("show ");
                        tbl.rows[i].style.display = "table-row";
                    } else {
                        tbl.rows[i].style.display = "none";
                    }
                }
            }
        }

        //  in model adding rows of variations on click add  
        $(document).ready(function() {
            $("#cardRow").hide();
            $("#addRowError").hide();

            $("#submitAll").click(function() {
                let colorIdj = $('#colorIdj').val();
                if (colorIdj == null) {
                    // $("#addRowError").show();
                    alert('please select the variations');
                    // location.replace("add_purchase.php")
                    return false;
                } else {
                    $('#formid').submit();
                }
            });

            $("#modelAdd").click(function() {
                // alert(rowid);
                let prod_qty = parseInt(prqty);
                // let total = parseInt(document.getElementById("total").value);
                let colorId = (document.getElementById("colour_id").value);
                let sizeId = (document.getElementById("size_id").value);
                let qty = parseInt(document.getElementById("qty").value);
                let purchase_price = parseInt(document.getElementById("purchase_price").value);
                let modrowid = parseInt(document.getElementById("modrowid").value);

                let counts = 0;
                let cnts = 0;

                var nvr;

                var tbl = document.getElementById("modelTbody");
                var totalRow = tbl.rows.length;
                // let table = document.getElementById("modTableid");

                // qtysum = 0;
                var qtysum = 0 + qty;

                for (i = 0; i < totalRow; i++) {
                    nvr = tbl.rows[i].cells[0].innerHTML;
                    if (mid == nvr) {
                        counts++;
                        qtysum = qtysum + parseInt(tbl.rows[i].cells[3].innerHTML);
                    }
                }
                cnts = counts + qty;
                console.log(counts + "+" + qty);
                console.log("cnts" + cnts);
                console.log(qtysum);
                console.log(prod_qty + " >= " + counts + " && " + prod_qty + " >= " + cnts + " && " + prod_qty + " >= " + qtysum);
                // console.log(prod_qty + " >= " + qty);
                if (prod_qty >= counts && prod_qty >= cnts && prod_qty >= qtysum) {
                    for (let a = 1; a <= 1; a++) {
                        // console.log(modrowid);
                        $("#modelTbody").append(`
            <tr id='row_id${modrowid}'>
            <input type='hidden' id="midj" name='mid[]' value='${mid}'/>
            <input type='hidden' id="colorIdj" name='colorId[]' value='${colorId}'/>
            <input type='hidden' id="sizeIdj" name='sizeId[]' value='${sizeId}'/>
            <input type='hidden' id="qtyj" name='qty[]' value='${qty}'/>
            <td>${mid}</td>
            <td>${colorId}</td>
            <td>${sizeId}</td>
            <td>${qty}</td>
            <td><button type='button' id='deleteMRow' onclick='deleteModRow(${modrowid++})' class='deleteBtn btn btn-danger'>Delete</button></td>
            </tr>
        `)
                    }
                } else {
                    alert("enter the quantity under product quantity");
                }
                counts = 0;
                cnts = 0;
                prod_qty = 0;
                qty = 0;
                $('#modrowid').val(modrowid);
            });
        });

        function deleteModRow(modrowid) {
            // alert('#row_id' + modrowid);
            $('#row_id' + modrowid).remove();
        }

        const rowDelete = (rowid) => {
            if (confirm("Are you sure you want to delete this row")) {
                $('#row' + rowid).remove();
            } else {
                close("You pressed Cancel!");
            } // var row = document.getElementById('rowid');
        }

        // const submitAll =()=>{
        //     alert("shubham");
        // }
    </script>

</body>

</html>
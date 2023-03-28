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
                        <h1 class="m-0 text-dark">Stock Transfer Entry</h1>
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
        <!-- <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }

   td {
    padding: 5px;
    text-align:center;
          
  }
  </style> -->

        <!-- Main content -->


        <section class="content">
            <div class="container-fluid">
                <form class="" role="form" method="POST" action="stock_transfer_b.php" name="forms" id="formid" enctype="multipart/form-data">
                    <!-- Firm master Register page -->
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card form-row">
                                <div class="card-header">
                                    Add Purchase
                                </div>

                                <div class="card-body form-row">
                                    <div class="col-md-3">
                                        <label for="inputEmail4">From Firm</label>
                                        <!-- <select class="form-control" id="fid" name="fid" onchange="fidSelect(this)"> -->
                                        <input type="name" class="form-control" id="fid" name="fid" onchange="fidSelect(this)" list="dataListId2" placeholder="Search for firms.." title="Type in a name">
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

                                    <div class="form-group  col-md-3">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Date</label>
                                        <input type="date" id="date" name="date" placeholder="MM/DD/YYY" type="text" class="form-control" required />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Product Name</label>
                                        <input type="name" class="form-control" onchange="addRow(this)" id="product_name" list="dataListId" placeholder="Search for names.." title="Type in a name">

                                        <datalist id="dataListId">

                                        </datalist>
                                    </div>

                                </div>
                            </div>

                            <div class="card form-row">
                                <div class="card-header">
                                    Product Add
                                </div>
                                <span class="text-center text-danger" id="addRowError">require fields are missing</span>
                                <div class="card-body form-row">
                                    <div class="col-md-3">
                                        <label for="inputEmail4">To Firm</label>
                                        <!-- <select class="form-control" id="tofirm" name="tofirm"> -->
                                        <input type="name" class="form-control" id="tofirm" name="tofirm" list="dataListId3" placeholder="Search for firms.." title="Type in a name">
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
                                        </datalist>
                                    </div>

                                    <div class="col-md-6 ml-5">
                                        <label for="exampleFormControlTextarea1">Remark</label>
                                        <textarea class="form-control" placeholder="enter here remark.." name="remark" id="remark" rows="3"></textarea>
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
                                            <table class="table table-responsive table-striped " id="tableid">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>Product Name</th>
                                                        <th>Available Products</th>
                                                        <th>Product QTY</th>
                                                        <!-- <th>Sale Price</th>
                                                        <th>Total</th> -->
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
                    <div class="col-md-6 float-right m-3">
                        <label for="inputEmail4">&nbsp;</label>
                        <center> <button type="submit" name="transfer" class="btn btn-success" id="transfer">Transfer</button></center>
                    </div>

                    <div class="float-right ">
                        <!-- <div class="col-md-3">
                            <label for="label">Total</label>
                            <input type="number" class="form-control" id="allTotals" name="allTotals" value="0" readonly="true">
                        </div> -->
                    </div>

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
            var fid = $('#fid').val();
            var date = $('#date').val();
            var tofirm = $('#tofirm').val();

            var qtys = parseInt($('#qtyinputB' + i).val());
            var avP = parseInt($('#availableProdB' + i).val());

            // alert(qtyq);
            // alert("qtyinput" + qtyinput);

            if (fid == "" || date == "" || tofirm == "" || qtys == "0") {
                alert('fill the blank');
                return false;
            } else if (qtys > avP || qtys == "") {
                alert('qty error');
                return false;
            } else {
                $('#formid').submit();
                alert("ok")
            }
        });

        $("#addCustomer").click(function() {
            $("#variationModal").modal("show");
        });
    });

    function fidSelect(idf) {
        // alert(idf.value);
        $.ajax({
            url: 'firmwise_name.php',
            type: 'POST',
            data: {
                idf: idf.value,
            },
            success: function(responsedata) {
                $('#dataListId').html(responsedata);
                // $('#fid').val("");
            }
        })
    }

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
                url: 'stock_transfer_get_b.php',
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
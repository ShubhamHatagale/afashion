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
                        <h1 class="m-0 text-dark"></h1>
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

        <section class="content">
            <div class="container-fluid">
                <form class="" role="form" method="POST" action="salesReturn_b.php" name="forms" id="formid" enctype="multipart/form-data">
                    <!-- Firm master Register page -->
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card form-row">
                                <div class="card-header">
                                    Returned products
                                </div>
                                <div class="card-body form-row">
                                    <div class="col-md-2">
                                        <label for="inputEmail4">Select Ivoice</label>
                                        <!-- <select class="form-control" id="fid" name="fid"> -->
                                        <input type="Select Invoice" class="form-control" id="sid" onchange="addRow(this)" name="suppliers" list="dataListId3" placeholder="Search for Invoices.." title="Type in a name">
                                        <datalist id="dataListId3">
                                            <?php
                                            include 'config.php';

                                            $selectquery = "select * from solded_products";

                                            $query = mysqli_query($conn, $selectquery);

                                            $nums = mysqli_num_rows($query);

                                            while ($res = mysqli_fetch_array($query)) {

                                            ?>
                                                <option value="<?php echo $res['invoice']; ?>"><?php echo $res['invoice']; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </dataListId3>
                                    </div>
                                </div>
                            </div>


                            <div class="card form-row" id="cardRow">
                                <div class="card-header">
                                    Customer Product Details
                                </div>
                                <div id="response">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body form-row float-right ">
                        <div class="col-md-6">
                            <label for="inputEmail4">&nbsp;</label>
                            <center> <button type="submit" name="return" class="btn btn-success" id="return">Return</button></center>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>

</html>


<script>
    function addRow(id) {
        // alert(id.value);
        $.ajax({
            url: 'salesReturn_get_b.php',
            type: 'POST',
            data: {
                id: id.value,
            },
            success: function(responsedata) {
                $('#response').html(responsedata);
                $('#sid').val('');

            }
        })

        // $.ajax({
        //     url: 'salesReturn_get_b.php',
        //     method: 'POST',
        //     data: {
        //         id: id.value,
        //     },
        //     success: function(responsedata) {
        //         $('#tableid').append(responsedata);
        //         $('#sid').val('');
        //     }

        // })



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
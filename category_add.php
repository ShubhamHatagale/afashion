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
    <title>Add Category</title>
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
                <div class="row ">
                    <div class="col-sm-3">
                        <span class="m-0 text-dark m-1"><b>Add Category</b></span>
                    </div><!-- /.row -->
                    <div class="col-sm-9">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="Brands.php">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                        <!-- <form class="" role="form" method="POST" action="firmAdd.php" enctype="multipart/form-data"> -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-grtableidmpleInputPassword2 ml-3" class="control-label">Category Name:</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="category_name" placeholder="enter category name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="col-md-6">
                                    <center> <button type="submit" class="btn btn-success ph-100" id="submit" tabindex="14">Submit</button></center>
                                </div>

                            </div>

                            <!-- <div class="col-md-6">
                                <center> <button type="load" class="btn btn-primary ph-100" tabindex="14">Display</button></center>
                            </div> -->
                        </div>
                        <!-- </form> -->
                    </div>
                </div>



                <div class="container-fluid">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Category Register</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Category Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody id="response">

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
        </section>
    </div>
    <!-- scripts  #-->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function() {

            $("#submit").on("click", function(e) {
                e.preventDefault();
                let category_name = $("#category_name").val();

                $.ajax({
                    url: "categoryAdd_b.php",
                    type: "POST",
                    data: {
                        cname: category_name
                    },
                    success: function(data) {
                        alert(data);
                        if (data == 1) {
                            alert("inserted succ");
                            displaydata();

                            // location.reload(true);
                        } else {
                            alert("cant save data");
                        }
                    }
                })
            })

            displaydata();
            // $('#displaydata').click(function() {
            function displaydata() {
                $.ajax({
                    url: 'categoryDisplay_b.php',
                    type: 'POST',
                    success: function(responsedata) {
                        $('#response').html(responsedata);
                    }
                })
                // })
            }
        });

        const deleted = (id) => {
            alert(id)
        }
    </script>


</body>

</html>
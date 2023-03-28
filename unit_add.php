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
    <title>Firm Master</title>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-2">
                            <span class=" text-dark"><b>Add Unit</b></span>
                        </div><!-- /.col -->
                        <div class="col-sm-10">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="firms.php">Home</a></li>
                                <li class="breadcrumb-item active">Unit</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Unit master Register page -->
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center ">
                        <!-- <form class="" role="form" method="POST" action="UnitAdd.php" enctype="multipart/form-data"> -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword2" class="control-label">Unit Name :</label>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subcate" placeholder="Enter Unit name" required onchange="chkVal()">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <center> <button type="submit" class="btn btn-success ph-100" id="submit" tabindex="14">Submit</button></center>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>

                    <div class="container-fluid">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><b>Unit Register</b></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Unit Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include 'config.php';

                                                $selectquery = "select * from units";

                                                $query = mysqli_query($conn, $selectquery);

                                                $nums = mysqli_num_rows($query);

                                                // $res = mysqli_fetch_array($query);

                                                while ($res = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $res['id']; ?></td>
                                                        <td><?php echo $res['name']; ?></td>

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
    </div>
    <!-- ./wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").on("click", function(e) {
                e.preventDefault();
                let subcate = $("#subcate").val();

                $.ajax({
                    url: "unitAdd_b.php",
                    type: "POST",
                    data: {
                        name: subcate
                    },
                    success: function(data) {
                        alert(data);
                        if (data == 1) {
                            alert("inserted succ");
                            location.reload(true);
                        } else {
                            alert("cant save data");
                        }
                    }
                })
            })

        })
    </script>
</body>

</html>
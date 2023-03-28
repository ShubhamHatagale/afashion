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
    <titlAdd e>Firm
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
                <div class="row">
                    <div class="col-sm-3">
                        <span class="m-0 text-dark m-1"><b>Add Fabric</b></span>
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
                <!-- Fabric master Register page -->
                <div class="row">
                    <div class="container-fluid">
                        <!-- <form class="" role="form" method="POST" action="FabricAdd.php" enctype="multipart/form-data"> -->
                        <div class="row">
                            <div class="container-fluid d-flex justify-content-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label">Fabric Name:</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subcate" placeholder="Enter Fabric name" required onchange="chkVal()">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <center> <button type="submit" class="btn btn-success ph-100" id="submit" tabindex="14">Submit</button></center>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>

                    <div class="container-fluid">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><b>Fabric Register</b></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Fabric Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include 'config.php';

                                                $selectquery = "select * from fabric";

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
                    url: "fabric_B.php",
                    type: "POST",
                    data: {
                        name: subcate
                    },
                    success: function(data) {
                        // alert(data);
                        if (data == 1) {
                            // alert("inserted succ");
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
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
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <?php
                        include 'config.php';

                        $selectquery = "select * from admin";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        $res = mysqli_fetch_array($query);

                        ?>
                        <h1 class="m-0 text-dark">Firm Master</h1>
                        <?php

                        ?>
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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- Firm master Register page -->
                <div class="row">
                    <div class="container-fluid">
                        <form class="" method="POST" action="firmAdd.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label">Firm Name :</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Firm name" required onchange="chkVal()">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="control-label">Proprietor Name :</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter  name" required>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Address :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
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
                                            <input type="text" class="form-control" id="cont" name="contac" placeholder="Enter Contact" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">GST No :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="gst" name="gst" placeholder="Enter GST No" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Firm Logo :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="file" class="form-control" name="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Bank Name :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="bnk" name="bank_name" placeholder="Enter Bank name" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">A/C No :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="acno" name="ac_no" placeholder="Enter A/C No" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">IFSC Code :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Enter IFSC Code" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Branch Name :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="branch" name="branch" placeholder="Enter Branch Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">User Id</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="userid" name="userid" placeholder="Enter User Id" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Email Id :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email id" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:15px">
                                <div class="col-md-6">
                                    <center> <button type="submit" class="btn btn-success ph-100" name="submit" id="submit" tabindex="14">Submit</button></center>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="container-fluid">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><b>Firm Register</b></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Firm Name</th>
                                                    <th>Proprietor Name</th>
                                                    <th>Address</th>
                                                    <th>Contac</th>
                                                    <th>GST</th>
                                                    <th>Firm Logo</th>
                                                    <th>Bank Name</th>
                                                    <th>Acc. No</th>
                                                    <th>IFSC</th>
                                                    <th>Branch Name</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include 'config.php';

                                                $selectquery = "select * from admin";

                                                $query = mysqli_query($conn, $selectquery);

                                                $nums = mysqli_num_rows($query);

                                                // $res = mysqli_fetch_array($query);

                                                while ($res = mysqli_fetch_array($query)) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $res['id']; ?></td>
                                                        <td><?php echo $res['fname']; ?></td>
                                                        <td><?php echo $res['pname']; ?></td>
                                                        <td><?php echo $res['address']; ?></td>
                                                        <td><?php echo $res['contac']; ?></td>
                                                        <td><?php echo $res['gst']; ?></td>
                                                        <td><img src="./uploads/<?php echo $res['file1']; ?>"  width="80" height="80"></td>
                                                        <td><?php echo $res['bank_name']; ?></td>
                                                        <td><?php echo $res['ac_no']; ?></td>
                                                        <td><?php echo $res['ifsc']; ?></td>
                                                        <td><?php echo $res['branch']; ?></td>
                                                        <td><?php echo $res['email']; ?></td>
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

</body>

</html>
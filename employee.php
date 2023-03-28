<?php
session_start();

if ($_SESSION['added_by']) {
    // echo 'welcom'.$_SESSION['added_by'];
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
                <div class="row">
                    <div class="col-sm-3">
                        <span class="m-0 text-dark m-1"><b>Add Employee</b></span>
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
                <div class="row">
                    <div class="container-fluid">

                        <form class="" role="form" method="POST" action="emp_Add_b.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label">Employee Name :</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="uname" name="uname" placeholder="enter unit name" required onchange="chkVal()">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="control-label">Contact :</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="contact" name="contact" placeholder="enter contact" required>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Landline No :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="lcontact" name="lcontact" placeholder="enter landline number" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Address :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="enter address" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Email :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="enter email" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">State Name :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="states" name="states" placeholder="enter state name" />
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
                                            <input type="text" class="form-control" id="bnk" name="bank_name" placeholder="enter bank name" />
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
                                            <input type="text" class="form-control" id="acc_no" name="acc_no" placeholder="enter account number" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">PAN Card :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="pan" name="pan" placeholder="enter pan card" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Aadhar Card :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="adhar" name="adhar" placeholder="enter adhar number" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:5px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">GST :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-4" style="border:0px solid #000">
                                        <div class="form-group">

                                            <input type="radio" name="gstcust" id="gst1" value="1" onChange="chkgst()" />Yes
                                            <input type="radio" name="gstcust" id="gst2" value="0" onchange="chkgst()" />No
                                            <input type="hidden" name="gststs" id="gststs" value="-1" style="width:50px" />
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">GST No. :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="gstNo" id="gstNo" readonly />
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
                </div>

                <div class="container-fluid">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Employee Register</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Unit Name</th>
                                                <th>Contact</th>
                                                <th>Landline No.</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>State</th>
                                                <th>Bank Name</th>
                                                <th>Acc. No</th>
                                                <th>PAN</th>
                                                <th>Adhar</th>
                                                <th>GST</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include 'config.php';

                                            $selectquery = "select * from employee";

                                            $query = mysqli_query($conn, $selectquery);

                                            $nums = mysqli_num_rows($query);

                                            // $res = mysqli_fetch_array($query);

                                            while ($res = mysqli_fetch_array($query)) {

                                            ?>
                                                <tr>
                                                    <td><?php echo $res['id']; ?></td>
                                                    <td><?php echo $res['uname']; ?></td>
                                                    <td><?php echo $res['contact']; ?></td>
                                                    <td><?php echo $res['lcontact']; ?></td>
                                                    <td><?php echo $res['address']; ?></td>
                                                    <td><?php echo $res['email']; ?></td>
                                                    <td><?php echo $res['state']; ?></td>
                                                    <td><?php echo $res['bank_name']; ?></td>
                                                    <td><?php echo $res['acc_no']; ?></td>
                                                    <td><?php echo $res['pan']; ?></td>
                                                    <td><?php echo $res['adhar']; ?></td>
                                                    <td><?php echo $res['gstcust']; ?></td>
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
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
                <div class="row">
                    <div class="col-sm-3">
                        <h4 class="m-0 text-dark mb-3"><b>Online Product</b></h4>
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
                        <form class="" method="POST" action="online_product_B.php" id="formid" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label">Category Name :</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="categories" name="categories" list="dataListId" placeholder="Search for firms.." title="Type in a name">
                                            <datalist id="dataListId">
                                                <?php
                                                include 'config.php';

                                                $selectquery = "select * from categories";

                                                $query = mysqli_query($conn, $selectquery);

                                                $nums = mysqli_num_rows($query);

                                                while ($res = mysqli_fetch_array($query)) {

                                                ?>
                                                    <option value="<?php echo $res['cname']; ?>"><?php echo $res['cname']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="control-label">Sub-Category Name :</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="sub_categories" name="sub_categories" list="dataListIdSub" placeholder="Search for firms.." title="Type in a name">
                                            <datalist id="dataListIdSub">
                                                <?php
                                                include 'config.php';

                                                $selectquerySub = "select * from sub_categories";

                                                $querySub = mysqli_query($conn, $selectquerySub);

                                                $nums = mysqli_num_rows($querySub);

                                                while ($resSub = mysqli_fetch_array($querySub)) {

                                                ?>
                                                    <option value="<?php echo $resSub['name']; ?>"><?php echo $resSub['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Brand :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="brands" name="brands" list="dataListIdBrand" placeholder="Search for Brands.." title="Type in a name">
                                            <datalist id="dataListIdBrand">
                                                <?php
                                                include 'config.php';

                                                $selectqueryBrand = "select * from brands";

                                                $queryBrand = mysqli_query($conn, $selectqueryBrand);

                                                $nums = mysqli_num_rows($queryBrand);

                                                while ($resBrand = mysqli_fetch_array($queryBrand)) {

                                                ?>
                                                    <option value="<?php echo $resBrand['name']; ?>"><?php echo $resBrand['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Bottom Styles :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="bottom_style" name="bottom_style" list="dataListIdbottom_style" placeholder="Search for bottom style.." title="Type in a name">
                                            <datalist id="dataListIdbottom_style">
                                                <?php
                                                include 'config.php';

                                                $selectquerybottom_style = "select * from bottom_style";

                                                $querybottom_style = mysqli_query($conn, $selectquerybottom_style);

                                                $nums = mysqli_num_rows($querybottom_style);

                                                while ($resbottom_style = mysqli_fetch_array($querybottom_style)) {

                                                ?>
                                                    <option value="<?php echo $resbottom_style['name']; ?>"><?php echo $resbottom_style['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Fittings :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="fitting" name="fitting" list="dataListIdFittings" placeholder="Search for fittings.." title="Type in a name">
                                            <datalist id="dataListIdFittings">
                                                <?php
                                                include 'config.php';

                                                $selectqueryFittings = "select * from fitting";

                                                $queryFittings = mysqli_query($conn, $selectqueryFittings);

                                                $nums = mysqli_num_rows($queryFittings);

                                                while ($resFittings = mysqli_fetch_array($queryFittings)) {

                                                ?>
                                                    <option value="<?php echo $resFittings['name']; ?>"><?php echo $resFittings['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Sleaves :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="sleaves" name="sleaves" list="dataListIdSleaves" placeholder="Search for firms.." title="Type in a name">
                                            <datalist id="dataListIdSleaves">
                                                <?php
                                                include 'config.php';

                                                $selectquerySleaves = "select * from sleaves";

                                                $querySleaves = mysqli_query($conn, $selectquerySleaves);

                                                $nums = mysqli_num_rows($querySleaves);

                                                while ($resSleaves = mysqli_fetch_array($querySleaves)) {

                                                ?>
                                                    <option value="<?php echo $resSleaves['name']; ?>"><?php echo $resSleaves['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Fabrics :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="name" class="form-control" id="fabric" name="fabric" list="dataListIdFabrics" placeholder="Search for firms.." title="Type in a name">
                                            <datalist id="dataListIdFabrics">
                                                <?php
                                                include 'config.php';

                                                $selectqueryFabrics = "select * from fabric";

                                                $queryFabrics = mysqli_query($conn, $selectqueryFabrics);

                                                $nums = mysqli_num_rows($queryFabrics);

                                                while ($resFabrics = mysqli_fetch_array($queryFabrics)) {

                                                ?>
                                                    <option value="<?php echo $resFabrics['name']; ?>"><?php echo $resFabrics['name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Main Image :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="file" accept=".jpg, .jpeg, .png" class="form-control " name="mainImage" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Product Sub Image :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="file" accept=".jpg, .jpeg, .png" class="form-control" id="subImage" name="subImage[]" multiple />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Discount Type :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                                <label class="form-check-label" for="inlineRadio1">percentage</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                                                <label class="form-check-label" for="inlineRadio2">fixed</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="control-label ">Discount Rate :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" id="discount_rate" name="discount_rate" placeholder="Search for firms.." title="Type in a name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Price :</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="prod_price" name="prod_price" placeholder="Search for product price.." title="Type in a name" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top:15px">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Title :</label>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control w-25 ml-1" name="title" placeholder="enter title">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Short Description :</label>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="text" placeholder="enter short description">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Long Description :</label>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="longDesc" placeholder="enter long description" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center m-2">
                                <button type="button" id="submitBtn" class="btn btn-success text-center">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



    </div>
    <script>
        $("#submitBtn").on("click", function() {
            if ($("#subImage")[0].files.length > 5) {
                alert("You can select only 5 sub images");
                return false;
            } else {
                $("#formid").submit();
            }
        });
    </script>
</body>



</html>
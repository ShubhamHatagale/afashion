<!DOCTYPE html>
<html>

<head>
    <title>Firm Master | A Fashion</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<body class="hold-transition sidebar-mini layout-fixed" onload="afterPageLoad()">
    <div id="loading"></div>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-slide="true" href="logout_b.php" role="button">
                        <i class="fas fa-th-large">LogOut</i>
                    </a>
                </li>
            </ul>
        </nav> <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">A Fashion</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a class="nav-link">

                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas "></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Contacts
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="firms.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Firm Master</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="customer.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Customer</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="suplier.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Supplier Master</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="employee.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Employee Master</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="category_add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="subcate_add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sub Category</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="brand_add.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Brand</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="unit_add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Units</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="color_add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Material Colour</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="size_add.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Material Sizes</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="botton_style.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bottom Styles</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="fitting.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fittings</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="sleaves.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sleaves</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="fabric.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fabric</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Purchase
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="add_purchase.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Purchase Entry</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="purchaseReg.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Purchase Order Register</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Stocks
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="availableStocks.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Available Stocks</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="openingStock.php" class="nav-link">

                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Opening Stock</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="soldedStocks.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solded Stocks</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="stockTranferEntry.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock Transfer Entry</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="stockTranferRegister.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock Transfer Register</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Sales
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="sales.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="sales_register.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales Register</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item has-treeview ">
                            <a class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Sales Return
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="sales_return.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales Return Entry</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="sales_return_reg.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales Return Register</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item has-treeview ">
                            <a href="online.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                Online
                                    <i class="fas "></i>
                                </p>
                            </a>
                            <!-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="sales_return.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales Return Entry</p>
                                    </a>
                                </li>
                            </ul> -->

                           
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
</body>
<!-- <script>
    $(".a").on("click", function() {
        $(".a").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });
</script> -->

<script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "nav-link active"
        }
    }

    const afterPageLoad = () => {
        let preloader = document.getElementById('loading');
        preloader.style.display = 'none';
    }
</script>

</html>
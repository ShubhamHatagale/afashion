<html>

<head>

    <title>Product Barcodes</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->


    <style>
        p.inl {
            float: left;
            padding: 1rem;
            text-align: center;
            display: block;
        }

        span {
            font-size: 13px;
        }
    </style>
    <style type="text/css" media="print">
        @page {
            size: auto;
            /* auto is the initial value */
            margin: 0mm;
            /* this affects the margin in the printer settings */

        }
    </style>

</head>

<?php
session_start();
include 'barcode128.php';
include("config.php");

  $piid = $_POST['piid'];
 $pq = $_POST['pq'];


for ($j = 0; $j < $pq; $j++) {
?>

    <body onload="window.print();">
        <div style="margin-left: 5%">
            <?php
            echo "<p class='inl'>" . bar128(stripcslashes($piid));
           
            echo " <span><b>www.afashion.co.in</b></span><br>";
            echo "<span><b>mob.9860769457</br></span>"

            ?>
        </div>
    </body>

<?php
}

?>

</html>
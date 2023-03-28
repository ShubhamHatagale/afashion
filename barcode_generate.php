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
            text-align:center;
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

if (isset($_POST['generateBarcode'])) {
    $added_by = $_SESSION['added_by'];
    $VariationId = $_POST['VariationId'];
    // $sh="shubham";

    $sizeRowId = sizeof($VariationId);
    $VariationQty = $_POST['VariationQty'];

    $prodName = $_POST['prodName'];
    $prodCode = $_POST['prodCode'];
    $prodSize = $_POST['prodSize'];
    $prodColor = $_POST['prodColor'];

    // echo '<pre>';
    // print_r($VariationQty);
    // echo '</pre>';

    for ($i = 0; $i < $sizeRowId; $i++) {
        // echo $VariationQty[$i];
        for ($j = 0; $j < $VariationQty[$i]; $j++) {
            // echo 'count <br>';
            // echo $VariationId[$i].'<br>';
            // echo $VariationQty[$j];
        //    echo $pc= $prodName[$i]."".$prodCode[$i]."".$prodSize[$i];

?>

            <body onload="window.print();">
                <div style="margin-left: 5%">
                    <?php
                    echo "<p class='inl'>". bar128(stripcslashes($VariationId[$i]));
                    // echo $prodName[$i] . "" . $prodCode[$i]."".$prodSize[$i];
                    // echo $prodName[$i];
                    // echo $prodCode[$i];
                    // echo $prodSize[$i];
                    // echo $prodColor[$i]."<br>";
                   echo " <span><b>www.afashion.co.in</b></span><br>";
                   echo "<span><b>mob.9860769457</br></span>" 

                    ?>
                </div>
            </body>

<?php
        }
    }
}
?>

</html>
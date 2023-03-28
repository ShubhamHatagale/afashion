<?php
session_start();
include("config.php");

if (isset($_POST['submitAll'])) {
    $added_by = $_SESSION['added_by'];
    $fid = $_POST['fid'];
    $invoice = $_POST['invoice'];
    $date = $_POST['date'];
    $suppliers = $_POST['suppliers'];
    // $total = $_POST['total'];
    $prod_code = $_POST['prod_code'];
    $prod_name = $_POST['prod_name'];
    $prod_qty = $_POST['prod_qty'];

    $purchase_price = $_POST['purchase_price'];
    $sale_price = $_POST['sale_price'];
    // $allTotal = $_POST['allTotal'];
    $modrowid = $_POST['modrowid'];
    $mid = $_POST['mid'];

    $colorId = $_POST['colorId'];
    $sizeId = $_POST['sizeId'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];

    $rowid = $_POST['rowid'];
    $rowArr = sizeof($rowid);
    $rowArr2 = sizeof($mid);
    $allTotals = $_POST['allTotals'];

    echo $total . "</br>";


    echo '<pre>';
    print_r($total);
    echo  '</pre>';


    $mainget = "SELECT * FROM `main_purchase` WHERE fid='$fid' AND invoice='$invoice' AND suppliers='$suppliers'";
    $maingetResult = mysqli_query($conn, $mainget);
    $mainRowcount = mysqli_num_rows($maingetResult);
    echo $mainRowcount;

    if ($mainRowcount == 0) {
        $mainsql = "INSERT INTO main_purchase(added_by,fid,invoice,date_time,suppliers)VALUES('$added_by','$fid','$invoice','$date','$suppliers')";
        $resultMain = mysqli_query($conn, $mainsql);
        $purchase_row_id = $conn->insert_id;

        for ($i = 0; $i < $rowArr; $i++) {
            $sql = "INSERT INTO purchase_rows(purchase_row_id,prod_code,prod_name,prod_qty,purchase_price,sale_price,total)VALUES('$purchase_row_id','$prod_code[$i]','$prod_name[$i]','$prod_qty[$i]','$purchase_price[$i]','$sale_price[$i]','$total[$i]')";
            $resultMain2 = mysqli_query($conn, $sql);
            $lastid = $conn->insert_id;

            for ($j = 0; $j < $rowArr2; $j++) {
                if ($rowid[$i] == $mid[$j]) {
                    $sqlb = "INSERT INTO purchase_variations(purchase_row_id,colorId,sizeId,qty)VALUES('$lastid','$colorId[$j]','$sizeId[$j]','$qty[$j]')";
                    $resultMain3 = mysqli_query($conn, $sqlb);

                    // header("location:add_purchase.php");

                } else {
                    echo "fail";
                }
            }
        }
    } else {
        while ($pvres = mysqli_fetch_array($maingetResult)) {
            $lastidRow = $pvres['id'];
        }
        for ($r = 0; $r < $rowArr; $r++) {
            $subGet = "SELECT * FROM `purchase_rows` WHERE prod_code='$prod_code[$r]' AND prod_name='$prod_name[$r]' AND purchase_price='$purchase_price[$r]' AND sale_price='$sale_price[$r]' AND purchase_row_id='$lastidRow[$r]'";
            $subGetResult = mysqli_query($conn, $subGet);
            $subRowcount = mysqli_num_rows($subGetResult);
            if ($subRowcount == 0) {
                echo $mainsqlIns = "INSERT INTO main_purchase(added_by,fid,invoice,date_time,suppliers)VALUES('$added_by','$fid','$invoice','$date','$suppliers')";
                $resultMainIns = mysqli_query($conn, $mainsqlIns);
                $purchase_row_idIns = $conn->insert_id;

                for ($i = 0; $i < $rowArr; $i++) {
                    $sqlIns = "INSERT INTO purchase_rows(purchase_row_id,prod_code,prod_name,prod_qty,purchase_price,sale_price,total)VALUES('$purchase_row_idIns','$prod_code[$i]','$prod_name[$i]','$prod_qty[$i]','$purchase_price[$i]','$sale_price[$i]','$total[$i]')";
                    $resultRowIns = mysqli_query($conn, $sqlIns);
                    $lastidIns = $conn->insert_id;

                    for ($j = 0; $j < $rowArr2; $j++) {
                        if ($rowid[$i] == $mid[$j]) {
                            $sqlbIns = "INSERT INTO purchase_variations(purchase_row_id,colorId,sizeId,qty)VALUES('$lastidIns','$colorId[$j]','$sizeId[$j]','$qty[$j]')";
                            $resultVarIns = mysqli_query($conn, $sqlbIns);

                            // header("location:add_purchase.php");

                        } else {
                            echo "fail";
                        }
                    }
                }
            } else {
                while ($pvres1 = mysqli_fetch_array($subGetResult)) {
                    $lastidRow2 = $pvres1['id'];
                }
                for ($v = 0; $v < $rowArr; $v++) {
                    echo $subGetVar = "SELECT * FROM `purchase_variations` WHERE colorId='$colorId[$v]' AND sizeId='$sizeId[$v]' AND purchase_row_id='$lastidRow[$v]' ";
                    $subGetVarResult = mysqli_query($conn, $subGetVar);
                    $subVarCount = mysqli_num_rows($subGetVarResult);
                    // echo $subVarCount . "</br>";
                    if ($subVarCount == 0) {
                        echo $varMainsqlIns = "INSERT INTO main_purchase(added_by,fid,invoice,date_time,suppliers)VALUES('$added_by','$fid','$invoice','$date','$suppliers')";
                        $resultVarMainIns = mysqli_query($conn, $varMainsqlIns);
                        $purchase_var_idIns = $conn->insert_id;

                        for ($i = 0; $i < $rowArr; $i++) {
                            echo $sqlVarIns = "INSERT INTO purchase_rows(purchase_row_id,prod_code,prod_name,prod_qty,purchase_price,sale_price,total)VALUES('$purchase_var_idIns','$prod_code[$i]','$prod_name[$i]','$prod_qty[$i]','$purchase_price[$i]','$sale_price[$i]','$total[$i]')";
                            $resultRowIns = mysqli_query($conn, $sqlVarIns);
                            $lastVaridIns = $conn->insert_id;
                            for ($j = 0; $j < $rowArr2; $j++) {
                                if ($rowid[$i] == $mid[$j]) {
                                    $sqlbVarIns = "INSERT INTO purchase_variations(purchase_row_id,colorId,sizeId,qty)VALUES('$lastVaridIns','$colorId[$j]','$sizeId[$j]','$qty[$j]')";
                                    $resultVarIns2 = mysqli_query($conn, $sqlbVarIns);

                                    // header("location:add_purchase.php");

                                } else {
                                    echo "fail";
                                }
                            }
                        }
                    } else {
                        echo "update";
                        while ($resvar = mysqli_fetch_array($subGetVarResult)) {
                            $lastidRowvar4 = $resvar['id'];
                            $variationQty = $resvar['qty'];
                        }
                        for ($j = 0; $j < $rowArr2; $j++) {
                            $subs = $variationQty + $qty[$j];
                            echo $updates = "UPDATE `purchase_variations` SET `qty`=$subs WHERE purchase_row_id='$lastidRow[$v]'";
                            $updresult = mysqli_query($conn, $updates);

                            // header("location:add_purchase.php");

                        }
                    }
                }
            }
        }
    }
}

<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
		include 'barcode128.php';
		// $product = $_POST['product'];
		$product_id = '0000000004';
		// $rate = $_POST['rate'];

		// for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'>".bar128(stripcslashes($product_id))."</p>&nbsp&nbsp&nbsp&nbsp";
		// }

		?>
	</div>
</body>
</html>
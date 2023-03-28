<?php

include 'config.php';

$selectquery = "select * from purchase";

$query = mysqli_query($conn, $selectquery);

// $nums = mysqli_num_rows($query);

// $res = mysqli_fetch_array($query);

if (mysqli_num_rows($query) > 0) {
    while ($res = mysqli_fetch_array($query)) {

?>
        <tr>
            <td><?php echo $res['invoice']; ?></td>
            <td><?php echo $res['prod_code']; ?></td>
            <td><?php echo $res['prod_name']; ?></td>
            <td><?php echo $res['colour_id']; ?></td>
            <td><?php echo $res['size_id']; ?></td>
            <td><?php echo $res['prod_qty']; ?></td>
            <td><a onclick="deleted(<?php echo $res['id']; ?>)"><i class="nav-icon fas fa-trash fa-lg text-danger"></a></td>
        </tr>
<?php
    }
} else {
    echo "0 results";
}

?>
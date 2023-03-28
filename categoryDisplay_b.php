<?php

include 'config.php';

$selectquery = "select * from categories";

$query = mysqli_query($conn, $selectquery);

// $nums = mysqli_num_rows($query);

// $res = mysqli_fetch_array($query);

if (mysqli_num_rows($query) > 0) {
    while ($res = mysqli_fetch_array($query)) {

?>
        <tr>
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['cname']; ?></td>
            <td><a onclick="edit(<?php echo $res['id']; ?>)"><i class="nav-icon fas fa-edit fa-lg "></a></i></td>
            <td><a onclick="deleted(<?php echo $res['id']; ?>)"><i class="nav-icon fas fa-trash fa-lg text-danger"></a></td>
        </tr>
<?php
    }
} else {
    echo "0 results";
}

?>
<?php
include_once 'connection.php';
$sql = "DELETE FROM orders WHERE order_id='" . $_GET["order_id"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'Displayorder.php';
} else {
    echo "loi trong qua trinh thuc hien xoa " . mysqli_error($conn);
}
mysqli_close($conn);
?>
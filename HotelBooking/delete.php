<?php

ob_start();
include('config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from master_rooms where room_id='$id'";
    $res = mysql_query($con,$sql);
    if ($res) {
        echo 'Record Successfully Deleted';
        header("Location:admin_dashboard.php");
    }
}
ob_end_flush();
?>

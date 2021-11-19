<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `crudtable` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
<?php
$path = "../php/database_about.php";
include_once($path);
if(isset($_POST['delete'])) {

    $id = $_POST['item_id'];

    $sql = "delete FROM musicians WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record modified successfully !";
    } else {
        echo "Error: " . $sql . "
    " . mysqli_error($conn);
    }
    mysqli_close($conn);

    header("Location: ../admin/admin_about.php");
}
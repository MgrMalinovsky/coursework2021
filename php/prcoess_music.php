<?php
$path = "../php/database_about.php";
include_once($path);
if(isset($_POST['save']))
{
    $mode = $_POST['mode'];
    $id = $_POST['item_id'];

    $event = $_POST['event'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $short_info = $_POST['short_info'];

    if ($mode == 'add') {
        $sql = "INSERT INTO tours (event,city,date,short_info)
        VALUES ('$event','$city','$date','$short_info')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    else if ($mode == 'edit') {
        $sql = "UPDATE tours SET event = '$event', city = '$city', date = '$date',info_short = '$short_info' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Record modified successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    header("Location: ../admin/admin_tours.php");
}



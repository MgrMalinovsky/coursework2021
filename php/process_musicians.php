<?php
$path = "../php/database_about.php";
include_once($path);
if(isset($_POST['save']))
{
    $mode = $_POST['mode'];
    $id = $_POST['item_id'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $info_short = $_POST['info_short'];
    $email = $_POST['email'];

    if ($mode == 'add') {
        $sql = "INSERT INTO musicians (first_name,last_name,info_short,email)
        VALUES ('$first_name','$last_name','$info_short','$email')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    else if ($mode == 'edit') {
        $sql = "UPDATE musicians SET first_name = '$first_name', last_name = '$last_name', info_short = '$info_short',email = '$email' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Record modified successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    header("Location: ../admin/admin_contact.php");
}



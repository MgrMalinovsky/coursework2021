<?php
$path = "../php/database_about.php";
include_once($path);
if(isset($_POST['save']))
{
    $mode = $_POST['mode'];
    $id = $_POST['item_id'];

    $fullname = $_POST['fullname'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];

    if ($mode == 'add') {
        $sql = "INSERT INTO contact (fullname,website,facebook,instagram)
        VALUES ('$fullname','$website','$facebook','$instagram')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    else if ($mode == 'edit') {
        $sql = "UPDATE contact SET fullname = '$fullname', website = '$website', facebook = '$facebook',instagram = '$instagram' WHERE id = '$id'";
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



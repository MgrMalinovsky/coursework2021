<?php
$path = "../php/database_about.php";
include_once($path);
if(isset($_POST['save']))
{
    $mode = $_POST['mode'];
    $id = $_POST['item_id'];

    $album = $_POST['album'];
    $titles = $_POST['titles'];

    if ($mode == 'add') {
        $sql = "INSERT INTO discography (album,titles)
        VALUES ('$album','$titles')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    else if ($mode == 'edit') {
        $sql = "UPDATE discography SET album = '$album', titles = '$titles' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Record modified successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    header("Location: ../admin/admin_discography.php");
}



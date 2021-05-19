<?php
$path = "../php/database_about.php";
include_once($path);
if(isset($_POST['save']))
{
    $mode = $_POST['mode'];
    $id = $_POST['item_id'];

    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="/gallery_upload/";

    /* new file size in KB */
    $new_size = $file_size/1024;
    /* new file size in KB */

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file=str_replace(' ','-',$new_file_name);
    if ($mode == 'add') {

        if (copy($file_loc,$folder.$final_file)) {

            $sql = "INSERT INTO gallery (file_name,type,size) 
        VALUES('$final_file','$file_type','$new_size')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
            } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
            }
            mysqli_close($conn);
            echo "New record created successfully !";
        }else {
        echo "Upload failed";
    }

    echo "</p>";
    echo '<pre>';
    echo 'Here is some more debugging info:';
    print_r($_FILES);
    print "</pre>";



    }

    else if ($mode == 'edit') {
        $sql = "UPDATE gallery SET file_name = '$final_file', type = '$file_type', size = '$new_size' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Record modified successfully !";
        } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }


}



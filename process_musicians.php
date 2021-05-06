<?php
include_once 'database.php';
if(isset($_POST['save']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $info_short = $_POST['info_short'];
    $email = $_POST['email'];
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
?>
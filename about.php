<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM musicians");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styling.css">

    <title>New</title>
</head>


<body>
<div class="wallpaper">
<div class="grey">
        <div class="row first_row">
    <div class="col-2">
        <a href="home.php" type="button" class="btn btn-primary back">Back</a>
    </div>
    <div class="col-8 main_sign text-white">Our musicians</div>
    <div class="col-2"></div>

</div>
<?php
if (mysqli_num_rows($result) > 0) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
?>
        <div class="row main" id="name_<?php echo $row; ?>">
            <div class="col-2 col-sm-2"></div>
                <div class="col-lg-8 col-sm-12 text-white central">
                    <div class="row first_level">
                        <div class="col-2 col-sm-2">
                            Name:
                        </div>
                        <div class="col-lg-8 col-sm-2 info">
                            <?php echo $row["first_name"];
                            echo " ";
                            echo $row["last_name"];?>
                        </div>
                    </div>
                        <div class="row second_level">
                            <div class="col-2 col-sm-2">
                                Info:
                            </div>
                            <div class="col-lg-8 col-sm-2 info">
                                <?php echo $row["info_short"];?>
                            </div>

                        </div>
                    <div class="col-2 col-sm-2"></div>
                </div>
        </div>
<?php
$i++;
}
}
else{
    echo "No result found";
}
?>
</div>
</div>

</body>
</html>
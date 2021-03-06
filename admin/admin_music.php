<?php
$path = "../php/database_about.php";
include_once($path);
$result = mysqli_query($conn,"SELECT * FROM music");
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
    <link rel="stylesheet" href="../styling.css?version=51">
    <script>
        function copyToForm(id) {
            const event = document.getElementById(`name_${id}_event`).innerText;
            const city = document.getElementById(`name_${id}_city`).innerText;
            const date = document.getElementById(`name_${id}_date`).innerText;
            const short_info = document.getElementById(`name_${id}_info_short`).innerText;
            
            document.getElementById(`event`).value = event;
            document.getElementById(`city`).value = city;
            document.getElementById(`date`).value = date;
            document.getElementById(`short_info`).value = short_info;
            

            document.getElementById(`mode`).value = "edit";
            document.getElementById(`item_id`).value = id;
        }
    </script>
    <title>New</title>
</head>
<body>
<div class="row first_row" id="top">
    <div class="col-2">
        <a href="admin_main.php" type="button" class="btn btn-primary back">Back</a>
    </div>
    <div class="col-8 main_sign text-black">Edit music</div>
    <div class="col-2"></div>

</div>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form method="post" action="../php/process_music.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="file">Music file</label>
                        <input type="file" class="form-control" id="file" name="file">
                    </div>
                    <input type="hidden" id="mode" name="mode" value="add"/>
                    <input type="hidden" id="item_id" name="item_id"/>

                    <button type="submit" class="btn btn-primary mt-4" name="save">Save</button>
                </form>
            </div>
        </div>

<?php
if (mysqli_num_rows($result) > 0) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
?>
        <div class="row main" id="name_<?php echo $row['id']; ?>">
            <div class="col-2 col-sm-2"></div>
                <div class="col-lg-8 col-sm-12 text-white central">
                    <div class="row first_level">
                        <div class="col-12" style="text-align: center;">
                            <form method="post" action="../php/delete_music.php">
                                <div class="row mb-4">
                                    <div class="col-10">
                                        <?php echo $row['title']?>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                                        <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>"/>
                                    </div>
                                </div>
                            </form>
                            <audio controls>
                                <source src="../music_upload/<?php echo $row['file_name'];?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    <div class="col-2 col-sm-2"></div>
                </div>
        </div>
<?php
        $i++;
    }
}
else {
    echo "No result found";
}
?>
    </div>
  </body>
</html>
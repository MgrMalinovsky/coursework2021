<?php
$path = "../php/database_about.php";
include_once($path);
$result = mysqli_query($conn,"SELECT * FROM contact");
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
            const fullname = document.getElementById(`name_${id}_full_name`).innerText;
            const website = document.getElementById(`name_${id}_website`).innerText;
            const facebook = document.getElementById(`name_${id}_facebook`).innerText;
            const instagram = document.getElementById(`name_${id}_instagram`).innerText;
            
            document.getElementById(`fullname`).value = fullname;
            document.getElementById(`website`).value = website;
            document.getElementById(`facebook`).value = facebook;
            document.getElementById(`instagram`).value = instagram;
            

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
    <div class="col-8 main_sign text-black">Our musicians</div>
    <div class="col-2"></div>

</div>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form method="post" action="../php/process_contact.php">

                    <div class="form-group">
                        <label for="fullname">Artist</label>
                        <input type="text" class="form-control" id="fullname" name="fullname">
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website">
                    </div>

                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook">
                    </div>

                    <div class="form-group">
                        <label for="instagram">Website</label>
                        <input type="email" class="form-control" id="instagram" name="instagram">
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
            <div class="col-2"></div>
                <div class="col-lg-8 col-sm-12 text-white central">
                    <div class="row first_level">
                        <div class="col-2">
                            Artist:
                        </div>
                        <div class="col-lg-8 col-sm-2 info">
                            <span id="name_<?php echo $row['id']; ?>_full_name"><?php echo $row["fullname"];?></span>
                        </div>
                        <div class="col-2">
                            <a href="#top" class="btn btn-primary" onclick="copyToForm(<?php echo $row['id']; ?>)">Edit</a>
                        </div>
                    </div>
                    <div class="row second_level">
                        <div class="col-2">
                            Website:
                        </div>
                        <div class="col-lg-8 col-sm-2 info">
                            <span id="name_<?php echo $row['id']; ?>_website"><?php echo $row["website"];?></span>
                        </div>
                        <div class="row second_level">
                            <div class="col-2">
                                Facebook:
                            </div>
                            <div class="col-lg-8 col-sm-2 info">
                                <span id="name_<?php echo $row['id']; ?>_facebook"><?php echo $row["facebook"];?></span>
                            </div>
                        <div class="col-2">
                            <form method="post" action="../php/delete_contact.php">
                            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                                <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>"/>
                            </form>
                        </div>
                    </div>
                    <div class="row third_level">
                        <div class="col-2">
                            Instagram:
                        </div>
                        <div class="col-lg-8 col-sm-2 info">
                            <span id="name_<?php echo $row['id']; ?>_instagram"><?php echo $row["instagram"];?></span>
                        </div>
                    </div>
                <div class="col-2"></div>
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
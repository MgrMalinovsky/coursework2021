<?php 
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== 'admin' || $_SERVER['PHP_AUTH_PW'] !== '123456') {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<img src="../png/monke-student.png"/>';
    exit;
}
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

  <title>New</title>
</head>
<body>


    <div class="row" id="onerow">
      <div class="col-lg-4">

      </div>
      <div class="col-sm-12 col-lg-12 text-black">
        <p>Welcome to admin website </p>
      </div>
      <div class="col-lg-4">

      </div>

    </div>

    <div class="row" id="secondrow">
      <div class="col-lg-4 col-sm-12">
        <a href="admin_about.php" class="btn btn-secondary btn-big">About</a>
      </div>
      <div class="col-lg-4 col-sm-12">
          <a href="admin_contact.php" class="btn btn-secondary btn-big">Contact</a>
      </div>
      <div class="col-lg-4 col-sm-12">
        <a href="admin_discography.php" class="btn btn-secondary btn-big">Discography</a>
      </div>

    </div>

    <div class="row" id="thirdrow">
      <div class="col-lg-4 col-sm-12">
        <a href="admin_music.php" class="btn btn-secondary btn-big">Music</a>
      </div>
      <div class="col-lg-4 col-sm-12">
          <a href="admin_tours.php" class="btn btn-secondary btn-big">Tours</a>      </div>
      <div class="col-lg-4 col-sm-12">
        <a href="admin_gallery.php" class="btn btn-secondary btn-big">Gallery</a>
      </div>

    </div>

    <div class="row main" id="fithrow">
        <div class="col-lg-1 col-sm-12"></div>
        <div class="col-sm-12 col-lg-10 text-center text-black">
            <a href="../user/home.php" type="button" class="btn btn-primary btn-lg btn-block">Go back to the website content</a>
        </div>
        <div class="col-lg-1 col-sm-12"></div>


    </div>



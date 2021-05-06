<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styling.css">

    <title>New</title>
</head>
<body>
	<form method="post" action="process_musicians.php">
    First name:<br>
		<input type="text" name="first_name">
		<br>
Last name:<br>
		<input type="text" name="last_name">
		<br>
Short info:<br>
		<input type="text" name="info_short">
		<br>
Email Id:<br>
		<input type="email" name="email">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>
<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Hotel</h2>
  </div>
<form method = "post" action = "hotel.php"> 
  <?php include('errors.php'); ?>
<h1>
<p>Insert informations about hotel? <a href="insert_hotel.php">insert</a></p>
    <p>Delete informations about hotel? <a href="delete_hotel.php">delete</a></p>
    <p>Update informations about hotel? <a href="update_hotel.php">update</a></p>
    <p>Find informations about hotel? <a href="find_hotel.php">find</a></p>
    <p> <a href="index.php?udername='1'" style="color: green;">back</a> </p>
</h1>
</form>
</body>
</html>
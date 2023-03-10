<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Autocar</h2>
  </div>
<form method = "post" action = "autocar.php"> 
  <?php include('errors.php'); ?>
<h1>
    <p>Insert informations about autocar? <a href="insert_autocar.php">insert</a></p>
    <p>Delete informations about autocar? <a href="delete_autocar.php">delete</a></p>
    <p>Update informations about autocar? <a href="update_autocar.php">update</a></p>
    <p>Find informations about autocar? <a href="find_autocar.php">find</a></p>
    <p> <a href="index.php?udername='1'" style="color: green;">back</a> </p>
</h1>
</form>
</body>
</html>
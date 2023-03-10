<?php include ('server.php') ?>

<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>UObiective</h2>
  </div>
<form method = "post" action = "obiective.php"> 
  <?php include('errors.php'); ?>
<h1>
    <p>Insert informations about obiectiv? <a href="insert_obiectiv.php">insert</a></p>
    <p>Delete informations about obiectiv? <a href="delete_obiectiv.php">delete</a></p>
    <p>Update informations about obiectiv? <a href="update_obiectiv.php">update</a></p>
    <p>Find informations about obiectiv? <a href="find_obiectiv.php">find</a></p>

    <p> <a href="index.php?udername='1'" style="color: green;">back</a> </p>
</h1>
</form>
</body>
</html>
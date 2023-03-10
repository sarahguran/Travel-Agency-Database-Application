<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>EXCURSII</h2>
  </div>
<form method = "post" action = "interogari.php"> 
  <?php include('errors.php'); ?>
<h1>
    <p>Afla informatii despre excursii<p>
    <div class="input-group">
  	  <button type="submit" class="btn" name="Excursii">Excursii</button>
  	</div>
      <p>Afla informatii despre o excursie<p>
      <p><a href="interogation2.php"style="padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;">Afla</a></p></h2>



<p> <a href="index.php?udername='1'" style="color: green;">back</a> </p>

</h1>

</form>
</body>
</html>
<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Date Excursii</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
<div class="header">
  	<h2>Interogation</h2>
</div>
<form method = "post" action = "interogation2.php"> 
  <?php include('errors.php'); ?>
  
  <div class="input-group">
  	  <label>Introduceti ID-ul Excursiei despre care aflati informatia:</label>
  	  <input type="ID_Excursie" name="ID_Excursie" value="<?php echo $ID_Excursie; ?>">
  	</div>
  <p>date despre obiectivele turistice<p>
  <div class="input-group">
  	  <button type="submit" class="btn" name="dateobiective">Click here</button>
  	</div>

      <p>date despre autocar<p>
  <div class="input-group">
  	  <button type="submit" class="btn" name="dateautocar">Click here</button>
  </div>


      <p>date despre preturi<p>
  <div class="input-group">
  	  <button type="submit" class="btn" name="datepreturi">Click here</button>
  	</div>

      <p>date despre cazari<p>
  <div class="input-group">
  	  <button type="submit" class="btn" name="datecazari">Click here</button>
  	</div>

      <p>date despre ghid<p>
  <div class="input-group">
  	  <button type="submit" class="btn" name="dateghid">Click here</button>
  	</div>
    
  	  
      <p> <a href="index.php?exit='1'" style="color: red;">exit</a> </p>


</body>
</html>
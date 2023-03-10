<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Insert</h2>
  </div>
<form method = "post" action = "inser_autocar.php"> 
  <?php include('errors.php'); ?>

    <div class="input-group">
  	  <label>Nr_inmatriculare</label>
  	  <input type="nrinmatr" name="nr_inmatriculare" value="<?php echo $nrinmatr; ?>">
  	</div>

    <div class="input-group">
  	  <label>Locuri</label>
  	  <input type="locuri" name="Locuri" value="<?php echo $locuri; ?>">
  	</div>

    <div class="input-group">
  	  <label>km</label>
  	  <input type="km" name="km" value="<?php echo $km; ?>">
  	</div>

    <div class="input-group">
  	  <label>consum</label>
  	  <input type="consum" name="consum" value="<?php echo $consum; ?>">
  	</div>

      <div class="input-group">
  	  <label>an_fabricatie</label>
  	  <input type="an_fabricatie" name="an_fabricatie" value="<?php echo $an_fabricatie; ?>">
  	</div>

    <div class="input-group">
  	  <button type="submit" class="btn" name="insert_autocar">Done</button>
  	</div>
      <p> <a href="autocar.php" style="color: green;">back</a> </p>

</form>
</body>
</html>
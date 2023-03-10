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
<form method = "post" action = "insert_obiectiv.php"> 
  <?php include('errors.php'); ?>

    <div class="input-group">
  	  <label>Denumire</label>
  	  <input type="denumire" name="denumire" value="<?php echo $denumire; ?>">
  	</div>

    <div class="input-group">
  	  <label>Localitate</label>
  	  <input type="localitate" name="localitate" value="<?php echo $localitate; ?>">
  	</div>

    <div class="input-group">
  	  <label>Judet</label>
  	  <input type="judet" name="judet" value="<?php echo $judet; ?>">
  	</div>

    <div class="input-group">
  	  <label>Pret</label>
  	  <input type="pret" name="pret" value="<?php echo $pret; ?>">
  	</div>

    <div class="input-group">
  	  <button type="submit" class="btn" name="insert_user">Done</button>
  	</div>

	  <p> <a href="obiectiv.php" style="color: green;">back</a> </p>

</form>
</body>
</html>
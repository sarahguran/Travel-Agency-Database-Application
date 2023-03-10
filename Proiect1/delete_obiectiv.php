<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="header">
  	<h2>Delete</h2>
  </div>

<form method="post" action="delete_obiectiv.php">
 <?php include('errors.php'); ?>

  <div class="input-group">
  	  <label>Obiectiv</label>
  	  <input type="text" name="denumire" value="<?php echo $denumire; ?>">
  </div>
  <div class="input-group">
  	  <button type="submit" class="btn" name="delete_obiectiv">Done</button>
  </div>
  <p> <a href="obiectiv.php" style="color: green;">back</a> </p>
</form>
</body>
</html>
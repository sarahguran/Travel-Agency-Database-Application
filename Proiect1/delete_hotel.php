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

<form method="post" action="delete_hotel.php">
 <?php include('errors.php'); ?>

  <div class="input-group">
  	  <label>Hotel</label>
  	  <input type="text" name="numehotel" value="<?php echo $numehotel; ?>">
  </div>

  <div class="input-group">
  	  <button type="submit" class="btn" name="delete_hotel">Done</button>
  </div>


  <p> <a href="hotel.php" style="color: green;">back</a> </p>


</form>
</body>
</html>
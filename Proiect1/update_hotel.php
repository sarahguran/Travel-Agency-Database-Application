<?php include ('server.php') ?>
<!DOCTYPE html> 
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Update hotel</h2>
  </div>
<form method = "post" action = "update_hotel.php"> 
  <?php include('errors.php'); ?>

    <div class="input-group">
  	  <label>Denumirea hotelului la care aduceti modificari</label>
  	  <input type="numehotel" name="numehotel" value="<?php echo $numehotel; ?>">
  	</div>
      <p> Completati doar campurile la care aduceti modificari.</p>
    <div class="input-group">
  	  <label>mic dejun</label>
  	  <input type="micdejun" name="micdejun" value="<?php echo $micdejun; ?>">
  	</div>

    <div class="input-group">
  	  <label>Pret pe noapte</label>
  	  <input type="pret" name="pret" value="<?php echo $pret; ?>">
  	</div>

    <div class="input-group">
  	  <button type="submit" class="btn" name="update_hotel">Done</button>
  	</div>

	  <p> <a href="hotel.php" style="color: green;">back</a> </p>

</form>
</body>
</html>
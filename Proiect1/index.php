<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  if (isset($_GET['exit'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: interogari.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h1><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></h1>
		<h2><p>Autocar <a href="autocar.php">Autocar</a></p>
		<p>Hotel<a href="hotel.php">Hotel</a></p>
		<p>Obiective_turistice<a href="obiective.php">Obiective_turistice</a></p>
		<p>Excursii <a href="interogari.php">Excursii</a></p></h2>
		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>


		
</body>
</html>
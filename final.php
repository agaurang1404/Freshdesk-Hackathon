<?php include 'database.php'; ?>
<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Driving Licence Preliminary Test</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Online Driving Licence Preliminary Test</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h1>You're Done !!!</h2>
			<p><h2>Congratulation You Have Completed the Test</h2></p>
			<p><h2>Final Score : <?php echo $_SESSION['score']; ?></h2></p>
			<a href="index.php" class="start"><font color="white">Take Test Again</font></a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, Team Real
		</div>
	</footer>
</body>
</html>
<?php include 'database.php';?>
<?php
	session_start();
	$query = "SELECT * FROM questions";
	$results = $mysqli->query($query);
	$query = "SELECT * FROM questions";
		$results = $mysqli->query($query);
		$total = $results->num_rows;
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
		<div id="head">
			<h1>Online Driving Licence Preliminary Test</h1>
		</div>
		</div>
	</header>
	<main>
		<div class="container">
		<div id="main">
			<h1>
				Take Test To Be Eligible For Permanent Driving Licence
			</h1>
			<p>
				<h2>This is a Multiple Choice question quiz</h2>
			</p>
			<ul>
				<li><strong>Number Of Question :</strong><?php echo $total; ?></li>
				<li><strong>Type :</strong> Multiple </li>
				<li><strong>Estimated Time : </strong><?php echo $total * .5; ?>Mins</li>
			</ul>
			<a href="question.php?n=1" class="start"><font color="white">Start Quiz</font></a></div>
		</div>
	</main>
	<footer>
		<div class="container">
		<div id="foot">
			<strong>Copyright &copy; 2017, Team Real<strong>
		</div>
		</div>
	</footer>
</body>
</html>
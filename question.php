<?php include 'database.php'; ?>
<?php
	$number = (int) $_GET['n'];
	$query = "SELECT * FROM questions WHERE question_number=$number";
	//get result
	$result = $mysqli->query($query);
	$question = $result->fetch_assoc();
	//new tool
	$query1 = "SELECT * FROM choices WHERE question_number= '$number' ";
	//get result
	$choices = $mysqli->query($query1);
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
			<h1>Online Driving Licence Preliminary Test</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">
				<font color="white">Question <?php echo $question['question_number'];?> of <?php echo $total; ?></font>
				</div>
				<p class="question">
					<strong><?php echo $question['text']; ?></strong>
				</p>
				<strong id="qst">Question <?php echo $number; ?></strong>
				<form method="post" action="process.php">
					<ul class="choices">
					<?php while($row = $choices->fetch_assoc()): ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
						
					</ul>
					<input type="submit" name="submit" value="submit" />
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
				</form>
		</div>
	</main>
	<footer>
		<div class="container">
			<strong>Copyright &copy; 2017, Team Real</strong>
		</div>
	</footer>
</body>
</html>
<?php include 'database.php'; ?>
<?php if(isset($_POST['submit'])) {
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$choices = array ();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	//inserting query
	$query = "INSERT INTO questions(question_number,'text') VALUES('$question_number', '$question_text')";
	$insert_row = $mysqli->query($query);
	if ($insert_row) {
		foreach ($choices as $choice =>$value){
			if ($value!= '') {
				if ($correct_choice == $choice){
						$is_correct = 1;
				}else {
						$is_correct = 0;
				}
				//choice query
				$query = "INSERT INTO choices(question_number,is_correct,'text') VALUES('$question_number', '$is_correct', '$value')";
				//run th equery
				$insert_row = $mysqli->query($query);
				//validate insert
				if($insert_row){
						continue;
				}else {
						die('Error :');
				}
			}
		}
		$msg = "Question has been added";

	}
}
$query = "SELECT * FROM questions";
		$results = $mysqli->query($query);
		$total = $results->num_rows;
		$next = $total+1;
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
			<h2>Add a Question</h2>
			<?php
				if (isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
			?>
			<form method="post" action="add.php">
				<p>
					<label>Question Number : </label>
					<input type="number" value="<?php echo $next; ?>" name="question_number" />
				</p>
				<p>
					<label>Question Text : </label>
					<input type="text" name="question_text" />
				</p>
				<p>
					<label>Choice 1 : </label>
					<input type="text" name="choice1" />
				</p>
				<p>
					<label>Choice 2 : </label>
					<input type="text" name="choice2" />
				</p>
				<p>
					<label>Choice 3 : </label>
					<input type="text" name="choice3" />
				</p>
				<p>
					<label>Choice 4 : </label>
					<input type="text" name="choice4" />
				</p>
				<p>
					<label>Correct Choice Number : </label>
					<input type="number" name="correct_choice" />
				</p>
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, Team Real
		</div>
	</footer>
</body>
</html>


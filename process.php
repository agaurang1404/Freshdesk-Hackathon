<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//check for score 
	if(!isset($_SESSION['score'])){
		$_SESSION['score']=0;

	}
	//checking for post
	if(isset($_POST['submit'])){
		//checking total no of rows
		$query = "SELECT * FROM questions";
		$results = $mysqli->query($query);
		$total = $results->num_rows;
		//getting number
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		//getting answer
		$query = "SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1";
		//get result
		$result = $mysqli->query($query);
		//get row
		$row = $result->fetch_assoc();
		//set the correct choice
		$correct_choice = $row['id'];
		//compare
		if($correct_choice == $selected_choice) {
			//answer is correct
			$_SESSION['score']++;

		}
		if($number == $total){
			header("Location: final.php");
			exit();

		} else {
			header("Location: question.php?n=".$next);
		}
	}
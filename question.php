<?php include 'db.php'; ?>
<?php 

?>

<?php

$number = $_GET['n'];


$query = "SELECT * FROM questions WHERE question_number = $number";


$result = mysqli_query($connection, $query);
$question = mysqli_fetch_assoc($result);


$query = "SELECT * FROM options WHERE question_number = $number";
$choices = mysqli_query($connection, $query);

$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection, $query));


?>
<html>

<head>
	<title>Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<main class="quiz-body">
		<div class="quiz-container p-3">
			<div class="p-3">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
			<p class="que_text"><?php echo $question['question_description']; ?> </p>
			<form method="POST" action="process.php">
				<ul class="list-group">
					<?php while ($row = mysqli_fetch_assoc($choices)) { ?>
						<li class="list-group-item list-group-item-action list-group-item-primary"><input type="radio" name="choice" value="<?php echo $row['id']; ?>" required><?php echo $row['question_option']; ?></li>
					<?php } ?>
				</ul>
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				<input type="submit" class="submit p-1" name="submit" value="Submit">
			</form>
		</div>
	</main>
</body>

</html>
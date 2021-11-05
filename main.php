<?php
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection, $query));
?>
<html>

<head>
	<title>Start Quiz</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="quiz-body">
	<div class="container-fluid col-8">

		<div class="position-relative form-container">
			<div>
				<h5><b>Mental Health Assessment</b></h5>
				Are you thinking about seeking the help of a therapist? If certain issues have been causing problems in your life and you aren't
				sure how to make the necessary changes, therapy can help. With the help of a professional, you can get out of an unhealthy cognitive, emotional, and behavioral pattern.
				<br>
				Fill out the following questionnaire truthfully. The results will only be helpful if you answer in an honest and complete manner.
			</div>
			<br>
			<div> Number of Questions:<?php echo $total_questions; ?> </div>

			<a href="question.php?n=1" class="btn btn-warning my-3 " role="button">Take the test</a>
			<a href="login.php" class="btn btn-secondary my-3 " role="button">Logout</a>

		</div>

	</div>


</body>


</html>
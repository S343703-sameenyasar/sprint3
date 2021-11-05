<?php
include 'db.php';
?>

<?php

session_start();

?>

<html>

<head>
	<title>iCare</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="quiz-body">



	<main>
		<div class="container form-container">

			<h2>Congratulation you have completed this test succesfully.</h2>
			<div>
				Your score is :
				<?php
				echo ($_SESSION['score']);
				?>
			</div>
			<?php

			if ($_SESSION['score'] >= 100) {
				echo "
				<div class='pt-3'><b>Please visit Dr Saba Gul</b></div>
				<div>Psychiatrist</div>
				<div>Head of psychiatric Department</div>
				<div>Royal Darwin Hospital</div>
				";
			} elseif ($_SESSION['score'] < 100 && $_SESSION['score'] >= 50) {
				echo "
				<div class='pt-3'><b>Please visit Dr Santos Linga</b></div>
				<div>MBBS</div>
				<div>Head of Medicine</div>
				<div>Royal Darwin Hospital</div>
				";
			} elseif ($_SESSION['score'] > 15 && $_SESSION['score'] < 50) {
				echo "
				<div class='pt-3'><b>Please visit Dr. Simha Aechoor</b></div>
				<div>MBBS</div>
				<div>General Practioner</div>
				<div>Care Point medical center</div>
				";
			} elseif ($_SESSION['score'] >= 0 && $_SESSION['score'] <= 15) {
				echo "
				<div class='pt-3'><b>You are completely fine.</b></div>
				";
			}

			unset($_SESSION['score']);

			?>

			<a href="main.php" class="btn btn-success my-3 " role="button">Take the test again?</a>

		</div>

	</main>


</body>

</html>
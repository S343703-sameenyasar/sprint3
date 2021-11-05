<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php 
	
if(!isset($_SESSION['score'])){
	$_SESSION['score'] = 0;
}

 if($_POST){
	
 	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
	
	
 	$number = $_POST['number'];
	$selected_choice  = $_POST['choice'];
	
	$query = "SELECT * FROM options WHERE id=$selected_choice";
	$result = mysqli_query($connection,$query);
	$option_score = mysqli_fetch_assoc($result); 

	$_SESSION['score'] = $_SESSION['score']+$option_score['option_score'];

 	$next = $number+1;
	
 	 if($number == $total_questions){
 	 	header("LOCATION: final.php");
 	 }else{
 	 	header("LOCATION: question.php?n=". $next);
 	 }

 }



?>
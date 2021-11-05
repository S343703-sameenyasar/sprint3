<?php include 'db.php' ?>
<?php 
    $number = $_POST['number'];
    $query = "DELETE FROM questions WHERE question_number = $number";
    if(mysqli_query($connection,$query)){
        header("LOCATION: adminlogin.php");
    }

?>
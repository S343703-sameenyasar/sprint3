<?php
    include 'db.php';
?>
<?php
    if($_POST){
        $user = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO user(name,password) values ('".$user."','".$password."')";
        
        $result = mysqli_query($connection,$query);

        if($result){
            header("LOCATION: login.php");
        }
        else{
            echo("Failed");
        }
    }
    
?>
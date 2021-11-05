<?php include 'db.php'; ?>

<?php 
    if($_POST){
        session_start();
        if(!isset($_SESSION['score'])){
            $_SESSION['userLogin'] = "Loggedin";
        }
        
        
        $user = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT name,password,type FROM user WHERE name='".$user."' AND password='".$password."' ";

        $result = mysqli_query($connection,$query);

        $logininfo = mysqli_fetch_assoc($result);
        
        
        if($logininfo){
            if($logininfo['type']=='not_admin'){
                header("LOCATION: main.php");
            }
            else if($logininfo['type']=='admin'){
                header("LOCATION: adminlogin.php");
            }
        }
        else{
            echo "Wrong Username or Password <br />".
            '<a href="login.php">Go back...</a>';
        }

    }
?>
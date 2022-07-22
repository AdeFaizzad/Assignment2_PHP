<?php

session_start();


       

include("connectionConfig.php");

if(isset($_POST['subm'])){
    $userEmail = $_POST["uEmail"];
    $userPassword = $_POST["uPassword"];

    $sql = "select * from user_registration where Email = '$userEmail' and password = '$userPassword'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    if($count == 1){  
     $_SESSION['auth'] = $count;
        echo "<h1><center> Login successful </center></h1>";  
    } else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
}
    

if(isset($_SESSION['auth'])){
    header("Location:Home.php");
}


    

    

?>
<?php

    session_start();
    if(!isset($_SESSION['auth'])){
        header("Location:Login_Form.php");
    }

   include("connectionConfig.php");
   $query = "select First_Name,Last_Name,Email,CFile from user_registration";
   $connect = mysqli_query($conn, $query); 
   $data = mysqli_fetch_assoc($connect);
   $num = mysqli_num_rows($connect);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <a href="logout.php">Logout</a>
    <?php
        if($num>0){
            while($data = mysqli_fetch_assoc($connect)){
                ?>
            
                <div class="container">
                <div>
                    <img class="pic" src="profile_pic/<?php echo $data["CFile"]; ?>">
                </div>
                <div class="content">
                    <div>
                        <p class="main-title">

                           First Name: <?php echo $data["First_Name"]; ?>
                            
                        </p>
                    </div>
                    <div>
                        <p class="sub-content">
                           Last Name: <?php echo $data["Last_Name"]; ?>
                        </p>
                    </div>
                    <div>
                        <p class="sub-content">
                           Email: <?php echo $data["Email"]; ?>
                        </p>
                    </div>
        
                </div>
            </div>
            <?php
            }
                

          }
         
        ?>
    
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 
    <div align="center">
        <h1>Welcome to Login Page</h1>
    <form name="uForm" action="Login.php" onsubmit = "return validation()"  method="post">
        
            <label for="">Email:</label>
            <br>
            <input type="text" name="uEmail" id="uEmail">
            <br><br>
            <label for="">Password:</label>
            <br>
            <input type="password" name="uPassword" id="uPassword">
            <br><br>
            <input type="submit" name="subm" value="Login">
        </form>
        <p align="center">
        Go to to <a href="Registration_Form.php">Registeration page</a> if you do not have an account!</a>
        </p>
    </div>
   

        <?php
            include("Registration.php");
        ?>

        <script>  
            function validation()  
            {  
                var uEmail=document.uForm.uEmail.value; 
                var uPassword=document.uForm.uPassword.value; 
                
                if(uEmail.length=="" && uPassword.length=="" ) {  
                    alert("fields are empty");  
                    return false;  
                }  
                    else  
                    {  
                        
                        if (uEmail.length=="") {  
                        alert("Email field is empty");  
                        return false;  
                        }
                        if (uPassword.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }
                    
                    }                             
            }  
        </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div align="center">
        <h1>Welcome to Registration Page</h1>
        <form name="uForm" action="Login_Form.php" onsubmit = "return validation()"  method="post" enctype="multipart/form-data">
            <label for="">First Name:</label>
            <br>
            <input type="text" name="ufName" id="ufName">
            <br><br>
            <label for="">Last Name:</label>
            <br>
            <input type="text" name="ulName" id="ulName">
            <br><br>
            <label for="">Email:</label>
            <br>
            <input type="text" name="uEmail" id="uEmail">
            <br><br>
            <label for="">Password:</label>
            <br>
            <input type="password" name="uPassword" id="uPassword">
            <br><br>
            <label for="">Confirm Password:</label>
            <br>
            <input type="password" name="uCPassword" id="uCPassword">
            <br><br>
            <input type="file" name="uFile" id="uFile">
            <br><br>
            <input type="submit" name="sub" value="Register">
        </form>
        <p align="center">
        Go to to <a href="Login_Form.php">Login page</a> if you already have an account!</a>
        </p>
    </div>
    

        <script>  
            function validation()  
            {  
                var ufName=document.uForm.ufName.value;  
                var ulName=document.uForm.ulName.value; 
                var uEmail=document.uForm.uEmail.value; 
                var uPassword=document.uForm.uPassword.value; 
                var uCPassword=document.uForm.uCPassword.value; 
                  
                if(ufName.length=="" && ulName.length=="" && uEmail.length=="" && uPassword.length=="" && uCPassword.length=="") {  
                    alert("fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(ufName.length=="") {  
                        alert("First Name is empty");  
                        return false;  
                    }   
                    if (ulName.length=="") {  
                    alert("Last Name field is empty");  
                    return false;  
                    }  
                    if (uEmail.length=="") {  
                    alert("Email field is empty");  
                    return false;  
                    }
                    if (uPassword.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                    if (uCPassword.length=="") {  
                    alert("Password Confirm field is empty");  
                    return false;  
                    }
                }                             
            }  
        </script> 
</body>
</html>
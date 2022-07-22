<?php

include("connectionConfig.php");

if(isset($_POST['sub'])){
    $userfName = $_POST["ufName"];
    $userlName = $_POST["ulName"];
    $userEmail = $_POST["uEmail"];
    $userPassword = $_POST["uPassword"];
    $userCPassword = $_POST["uCPassword"];

    if(isset($_FILES['uFile']['name'])){
        $userFile = $_FILES["uFile"]["name"];
        $ext = explode(".",$userFile);
        $cn = count($ext);

        if($ext[$cn-1]=='jpg' || $ext[$cn-1]=='png' || $ext[$cn-1]=='jpeg'){
            $tm = $_FILES["uFile"]["tmp_name"];
            move_uploaded_file($tm,"profile_pic/".$userFile);

                if ($userPassword==$userCPassword){

                    $sql = "INSERT INTO user_registration(First_Name, Last_Name, Email, Password, CPassword, CFile)
                    VALUES ('$userfName','$userlName','$userEmail', '$userPassword', '$userCPassword','$userFile')";
        
                    mysqli_query($conn, $sql);
                } else{
                    echo"Password Does Not Much";
                }
        } 
        else{
            
            header("location:Registration_Form.php");
            echo"file type not allowed";
        }
    }

}
?>
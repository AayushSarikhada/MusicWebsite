<?php

    $db_con = new mysqli("localhost","root","","music_website" );

    if($db_con->errno){
        echo "connection error".$db_con->errno;
    }
    else{
        $user_name = $_POST["userName"];
        $user_pass = $_POST["userPass"];

        // $stored_pass = password_hash($user_pass,PASSWORD_DEFAULT);

        
        
        $sql_query = "INSERT INTO userinfo(userName,userPass) 
            VALUES('$user_name','$user_pass');
        ";

        $result = $db_con->query($sql_query);
        if($result){
            header("Location:login.php?msg = REGISTRATION SUCCESSFULL");
        }else{
            header("Location:register.php?msg = REGISTRATION FAILED");
        }
    }

?>
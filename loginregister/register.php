<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <!-- <h1>REGISTER</h1> -->
    <?php
        if(isset($_REQUEST["msg"])){
            echo $_REQUEST["msg"];
        }
    ?>
    <br>
    <br>

    <form name="regi" action="doRegister.php" method="post">
<h2>Registration Form</h2>
 
<label  for="r3" id="un">Username :</label>
<input type="text" name="userName" id="r3"><br/>
 
<label  for="r4" id="pwd">Password :</label>
<input type="password" name="userPass" id="r4"><br/>

 
<button type="submit" value="Submit" id="button">Register</button>
<a href="login.php">Back to Login</a>

    <!-- <form method="POST" action="doRegister.php" >

        UserName: <input type="text" name="userName"/>
        <br>
        <br>
        Password: <input type="password" name="userPass"/>
        <br>
        <input type="submit" />

    </form> -->
</body>
</html>
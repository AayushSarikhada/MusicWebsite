<h1>
<?php

if(isset($_REQUEST["msg"])){
    
    echo $_REQUEST["msg"];
}
?>
</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

<div id="container">
<form action="validation.php" method="post" id="flogin">
 
<div class="border-box">
<h2>Login Form</h2>
<label for="uname" id="un">Username:</label>
<input type="text" name="userName" placeholder="Enter Username" id="uname"><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="userPass" placeholder="Enter Password" id="upass"><br/>
 
<button type="submit" name="login"  id="submit" >Login</button>
 
<a href="register.php">New Member</a>
</div>
 
</form>
<!-- </div>
    
    <h1>LOGIN</h1><br><br>
    <div style="margin:auto" >
    <form action="./validation.php" method="POST">
        User Name:
        <input name="userName" type="text"/><br>
        Password:
        <input name="userPass" type="password"/><br>
        <a href="register.php">register</a>
        <input type="submit" name="login"/>
    
    </form>
    </div> -->
</body>
</html>
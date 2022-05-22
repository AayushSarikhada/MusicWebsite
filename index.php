<?php
session_start();
if (isset($_SESSION["name"]))
{
	header("location:loginregister/songHome.php");
}
else{
    header("location:loginregister/login.php");
}
?>

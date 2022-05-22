
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "music_website");
if (isset($_POST["login"]))

{
	if (!empty($_POST["userName"]) && !empty($_POST["userPass"]))
	{
		
		$name = mysqli_real_escape_string($connect, $_POST["userName"]);
		$password = md5(mysqli_real_escape_string($connect,
											$_POST["userPass"]));
		$sql = "SELECT * FROM userinfo where userName='$_POST[userName]' and userPass='$_POST[userPass]'";
								
		$result = mysqli_query($connect, $sql);
		$user = mysqli_fetch_array($result);
		echo $user;
		
		if ($user)
		{
			echo $_POST["userName"];
		echo $_POST["userPass"];
			// Saving the username and password as cookies
			
			
				if (isset($_COOKIE["user_login"]))
				{
					setcookie("user_login", "");
				}
				if (isset($_COOKIE["user_password"]))
				{
					setcookie("user_password", "");
				}
			$_SESSION["name"] = $name;
			header("location:songHome.php");
		}
		else
		{
			echo "Invalid Login Credentials";
		}
	}
	else
	{
		echo "Both are Required Fields. Please fill both the fields";
	}
}
?>
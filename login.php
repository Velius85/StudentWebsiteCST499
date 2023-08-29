<?php
error_reporting(E_ALL^E_NOTICE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'master.php';?>

<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','studentdatabase') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM studentprofile WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['student_id'];
		$_SESSION["email"] = $row['email'];
		$_SESSION["password"] = $row['password'];
        $_SESSION["firstName"] = $row['firstName'];
		$_SESSION["lastName"] = $row['lastName'];
	        } else {
        $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
	header("Location:index.php");
	}
?>

	<div class="container text-container">
	<h1>Welcome to the Login Page</h1>
	</div>
	
	<form name="frmUser" method="post" action="" align="center">
		<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<h3 align="center">Enter Login Details</h3> Username:<br>
			<input type="text" name="email"><br> Password:<br>
			<input type="password" name="password">
			<br>
			<br>
			<input type="submit" name="submit" value="Submit">
			<input type="reset">
	</form>

		
<?php require_once 'footer.php';?>
</body>
</html>

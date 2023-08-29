<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>

<?php
session_start();
?>

<?php error_reporting(E_ALL ^ E_NOTICE);
?>
<html lang="en">
<head>
<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php require 'master.php';?>


<div class='container text-container'>
<h1>Welcome to the Home Page</h1>


</div>

<?php require_once 'footer.php';?>

</body>
</html>
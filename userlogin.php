<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>User Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <?php require 'master.php';?>
  <h1>User Log In</h1>
  <div class="input-field"><div class="container text-container">
        <h3>Please sign In</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Email" required />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pass" style="width:20em;" placeholder="Enter your Password" required />
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" /><br><br>

          </div>
          
        </form>
      </div>
      </html>

      <?php
  
      include 'db_connection.php';
	  
	  
if(isset($_POST['submit'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query=mysqli_query($db,"SELECT * FROM tbluser WHERE email = '$user' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['user_id'];
  
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script>
    <?php
}	  
}
      ?>
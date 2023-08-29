
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta Name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

  <title>User Profile</title>
    <?php include 'master.php';	?>
	
	<div class='container text-container'>
	<h1>User Profile</h1>
	</div>

	<div class="profile-input-field"><div class="container text-container">
        
		<h3>  Change fields if needed  </h3>
        <form method="post" action="#" >

		<div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" style="width:20em;"  required value='<?php echo $_SESSION['email']; ?>'>
          </div>
		<div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" style="width:20em;"  value='<?php echo $_SESSION['password']; ?>'>
          </div>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstName" style="width:20em;"  value='<?php echo $_SESSION['firstName']; ?>'>
          </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastName" style="width:20em;" value='<?php echo $_SESSION['lastName']; ?>'>
          </div>
 
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:10em; margin:0;"><a href="logout.php"class="btn btn-primary" style="width:10em; margin:0;">Log out</a><br><br>
          </div>
        </form>
      </div>
    </html>
      
	<?php

		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];

			
        $query = "UPDATE studentprofile SET
			email = '$email',
			password = '$password',
			firstName = '$firstName',
			lastName = '$lastName',

            WHERE student_id = '$id'";
                $result = mysqli_query($db, $query) or die(mysqli_error($db));
        ?>
      
	  <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>

        <?php
		CloseCon($conn);
}             
?>
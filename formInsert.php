<?php

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$SSN = $_POST['SSN'];
    }

	include 'db_connnection.php';
	$conn = OpenCon();

    $sql = "INSERT INTO tblUser(id, email, password, firstName, lastName) 
	VALUES ('', '$email', '$password', '$firstName', '$lastName',)";
  
  
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
      
    // close connection
    mysqli_close($conn);

?>
<a href="master.php"><span class="glyphicon glyphicon-home"><span>Home</a>
<?php
$classID = '';
$studentID = '';

	session_start();

	error_reporting(E_ALL ^ E_NOTICE);
	
    if(isset($_SESSION['id']))
	{
	$studentID = $_SESSION['id'];
	}

     if(isset($_POST["course_id"]))
        {	
	$classID = $_POST["course_id"];
	}



?>

<?php
	include 'course_db.php';
	$conn = OpenCon();

 
    $sql = "INSERT INTO courseenrollment(classID, studentID) 
	VALUES ('$classID', '$studentID')";
  
    $rs = mysqli_query($conn, $sql);

    if($rs)
    {
        echo "Enrolled in Course!";
    }
      
    // close connection
    mysqli_close($conn);

?>
<a href="master.php"><span class="glyphicon glyphicon-home"><span>Home</a>
<html>
<?php 
session_start();
$_SESSION ['course_id'] = '';
?>

 <head>
 </head>
 <body>   

    <div class="form">	<div class="container text-container">
    <form method="POST" action="classInsert.php">
<p >
      <label  for="English"> English </label>
      <button type="submit" name="course_id" value="1">Enroll</button>
</p>
<p >
      <label  for="Math"> Math </label>
      <button type="submit" name="course_id" value="2">Enroll</button>
</p>
<p >
      <label  for="Science"> Science </label>
      <button type="submit" name="course_id" value="3">Enroll</button>
</p>
<p >
      <label  for="History"> History </label>
      <button type="submit" name="course_id" value="4">Enroll</button>
</p>

</form>

	</div>

    </form>
</body>
</html>
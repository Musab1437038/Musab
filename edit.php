<?php 

$con=mysqli_connect("localhost","root","","practice");
$xyz=$_GET['abc'];
$q="Select * from `pagal` where ID = '$xyz'";
$row=mysqli_query($con,$q);
$data=mysqli_fetch_assoc($row);

 ?>
 <h1><center>EDIT</center></h1>
 <form method="post">
 	<label>NAME</label>
 	<input type="text" name="" value="<?php echo $data['NAME'] ?>">
 	<br> 

 	<label>EMAIL</label>
 	<input type="text" name="" value="<?php echo $data['EMAIL'] ?>">
 	<br> 

 	<label>SUBJECT</label>
 	<input type="text" name="" value="<?php echo $data['SUBJECT'] ?>">
 	<br> 

 	<label>MESSAGE</label>
 	<input type="text" name="" value="<?php echo $data['MESSAGE'] ?>">
 	<br> 

 	
 	
 </form>
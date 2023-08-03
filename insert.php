<?php

if(isset($_POST['register'])){
$firstname=$_POST['f_name'];
$lastname=$_POST['l_name'];
$error=array();
if($firstname==null){
	$error['firstname']="First Name Cannot be Empty";
}
if($lastname==null){
	$error['lastname']="Last Name Cannot be Empty";
}
if(count($error)==0){
	$con=mysqli_connect('localhost','root','','inc');
	$query=mysqli_query($con,"insert into diu(fname,lname) values('$firstname','lastname')");

	if($query){
		echo "Data Insert Successfully";
	}
	else{
		echo "Data Insert Failed";
	}
	


}


}

?>
<html>
<head>
<title>Insert Page</title>
</head>
<body>
<form method="POST" action="">
<input type="text" name="f_name" placeholder="Enter your First Name"><br><br>
<?php
if(isset($error['firstname'])){
	echo $error['firstname'];
}
?>
<input type="text" name="l_name" placeholder="Enter your Last Name"><br><br>
<?php
if(isset($error['firstname'])){
	echo $error['firstname'];
}
?>
<input type="submit" name="register" value="Sing UP">
</form>
</body>
</html>
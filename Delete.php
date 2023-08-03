<?php
//view er 2 ta button nisi update and delete er jonno oita run korle tab e koto number delete kora hoccche dekha jacche eita set korar jonno eikhane get use kora hoyeche
if(isset($_GET['deleteid'])){
$did=$_GET['deleteid'];
$con=mysqli_connect('localhost','root','','inc');
//delete query
$query=mysqli_query($con, "delete from diu where id='$did'");

if($query){
echo "Data Deleted";
}
else{
echo "Data Delete hoy nai";
}
}
?>
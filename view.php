 <html>
<head>
<title>View php</title>
</head>
<body>
<table>
<tr>
<th>Serial NO</th>
<th>First Name</th>
<th>Last Name</th>
</tr>

<?php
//database connection_aborted
$con=mysqli_connect('localhost','root','','inc');
//inc database e diu nam er je table ta ache tar sob data ber kore anbe select * dewa te...eikhane * diye all bujhano hoise
$result=mysqli_query($con, "select * from diu");
//table theke data gulo colum akare seperate korar jonno mysqli_fetch_assoc use kora hoyese 
while($row=mysqli_fetch_assoc($result)):

?>

<tr>
//table er element gular name lekha hoyese je nam e ami diu table e element rakhsi
 <td><?php echo $row['ID'];?></td>
 <td><?php echo $row['fname'];?></td>
 <td><?php echo $row['lname'];?></td>
 
 //update and delte er jonno ei duitsa extra neya hoyse 
 //href e je kaj kora hoyse sekhane delete korar jonno amara seral no nisi karon eita unique 
 <td><a href='delete.php?deletedid=<?php echo $row['ID'];?>">Delete</a></td>
 <td><a href="#">update</a></td>
 </tr>
 <?php endwhile;?>
 </table>

</body>
</html>

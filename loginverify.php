<?php
session_start(); 
include('db.php'); 
?>
<html>
<head>
	<title>login verification</title>
</head>
<body>
	<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT username,password from entryaccess where username='$username' and password='$password'";
$rows=mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($rows);


if($num_rows>0){
	while($row = mysqli_fetch_array($rows)){
	$u = $row['username'];
	$p = $row['password'];

	if(($u==$username) && ($p==$password)){
		$_SESSION['user']=$username;
		header('location: dashboard.php');

	}else{
		echo "Username or Password is wrong please try again";
		include('login.php');
	}

}
}else{
	echo "User Not Found. Please try again";
	include('login.php');
}


	 ?>

</body>
</html>
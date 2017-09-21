
<?php 
session_start(); ?>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" herf="js/bootstrap.min.js"></script>
</head>
<body>
<?php 
if(!isset($_SESSION['user'])){
	include('login.php');
}else{
	$user = $_SESSION['user'];

	echo "<hr><h1>Admin Dashboard</h1><hr><br>";
	echo "<h3>Welcome, $user</h3>";
	echo "<a href='marksentry.php' class='btn btn-success'>Enter Marks</a><br><br><br>";
 echo "<a href='logout.php' class='btn btn-danger'>Logout</a>";
 }
 ?>
</body>
</html>
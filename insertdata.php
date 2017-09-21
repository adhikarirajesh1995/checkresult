<?php 
session_start(); 
?>
<html>
<head>
	<title>provide details entry</title>
</head>

<body>
	<?php 
if(!isset($_SESSION['user'])){
	include('login.php');
}else{
	$user = $_SESSION['user'];

	$symbol=$_POST['symbolno'];
	$name=$_POST['sname'];
	$date=$_POST['dob'];
	$sci=$_POST['science'];
	$math=$_POST['maths'];
	$computer=$_POST['comp'];
	$nep=$_POST['nepali'];
	$helth=$_POST['health'];
	$res=$_POST['result'];
$con=mysqli_connect("localhost","root","","slc");
$sql="insert into student(symbolno,sname,dob,science,maths,comp,nepali,health,result)values('$symbol','$name','$date','$sci','$math','$computer','$nep','$helth','$res')";
$query_result=mysqli_query($con,$sql);
if($query_result){
	echo "data inserted successfully";
}else{
	echo "data not inserted successfully";
}

}
?>
 
</body>
</html>
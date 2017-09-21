<?php
session_start();
?>
<html>
<head>
	<title>date of birth form</title>
	<script>
	function validateForm(){
		var dob = document.birthdate.dob;
		if(dob.value=="" ){
			alert("Please enter field");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>

<?php

$symbol=$_POST['symbol'];
$_SESSION['symbol']=$symbol;
$con=mysqli_connect("localhost","root","","slc");
$query="select result from student where symbolno='$symbol'";
$rows = mysqli_query($con,$query);
$num_rows = mysqli_num_rows($rows);

if($num_rows==0){
	echo "Symbol number not found in database";
	include('index.html');
}

if($num_rows>0){
	while($row = mysqli_fetch_array($rows)){
	$result = $row['result'];
	echo "Your result is $result";

?>
	<form name="birthdate" method="post" action="displaymarksheet.php" onsubmit="return validateForm();">
		<p><h1>Enter your dob  to view your marksheet</h1></p>
		<input type="text" name="dob" placeholder="yyyy-mm-dd"/>
		<input type="submit" value="submit">
</form>

<?php
}}
?>
</body>
</html>
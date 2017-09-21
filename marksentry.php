<?php
session_start();
?>
<html>
<head>
	<title>Entry Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript"href="js/bootstrap.min.js"></script>
	<script type="text/javascript">

	</script>
</head>
<body>
	<?php 
if(!isset($_SESSION['user'])){
	include('login.php');
}else{
	$user = $_SESSION['user'];
?>
<hr><hr><h2>Dashbord..</h2><hr><hr>
<form  name="dashboard" method="POST" action="insertdata.php" onSubmit="return validateEntry();">
<p>Symbolno.</p>
<input type="text" name="symbolno" placeholder="Enter symbolno"/>
<p>Students Name.</p>
<input type="text" name="sname" placeholder="Enter Student Name"/>
<p>Date Of Birth.</p>
<input type="date" name="dob" placeholder="Enter date of birth"/>
<p>Science.</p>
<input type="number" name="science" placeholder="Enter Marks in Science"/>
<p>Maths.</p>
<input type="number" name="maths" placeholder="Enter marks in maths"/>
<p>Computer.</p>
<input type="number" name="comp" placeholder="Enter Marks in comp."/>
<p>Nepali.</p>
<input type="number" name="nepali" placeholder="Enter marks in nepali"/>
<p>Health.</p>
<input type="number" name="health" placeholder="Enter Marks in health"/>
<p>Result.</p>
<input type="text" name="result" placeholder="Pass or fail"/>
<br>
<br><input type="submit" value="submit" />
</form>

<script>
function validateEntry(){
		var symbolno = document.dashboard.symbolno;
		var sname = document.dashboard.sname;
		var dob = document.dashboard.dob;
		var science = document.dashboard.science;
		var maths = document.dashboard.maths;
		var comp = document.dashboard.comp;
		var nepali = document.dashboard.nepali;
		var health = document.dashboard.health;
		var result = document.dashboard.result;
if(symbolno.value=="" && sname.value=="" && dob.value=="" && science.value=="" && maths.value=="" && comp.value=="" && nepali.value=="" && health.value=="" && result.value==""){
			alert("Please enter all field");
			return false;
		}
		return true;
	}

</script>
<?php
}
?>
<a href="login.php" class="btn btn-primary">Go Back Home</a>
</body>
</html>
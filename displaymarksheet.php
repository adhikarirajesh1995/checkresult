<?php
session_start();
$con=mysqli_connect("localhost","root","","slc");
?>

<html>
<head>
	<title> Marksheet details</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
<br>		
<h2><hr><hr>This is the Details of the marksheet<hr><hr></h2>
<br>
<?php
$symbolno = $_SESSION['symbol'];
$dob = $_POST['dob'];
$sql = "select * from student where symbolno='$symbolno' && dob='$dob' ";
$rows = mysqli_query($con,$sql);

echo "<table border='2'";
echo "<tr>";

echo "<th>";
echo "Symbolno";
echo "</th>";
echo "<th>";
echo "Student Name";
echo "</th>";
echo "<th>";
echo "Science";
echo "</th>";
echo "<th>";
echo "Maths";
echo "</th>";
echo "<th>";
echo "Comp.";
echo "</th>";
echo "<th>";
echo "Nepali";
echo "</th>";
echo "<th>";
echo "Health";
echo "</th>";
echo "<th>";
echo "Percentage";
echo "</th>";
echo "<th>";
echo "Result";
echo "</th>";

while($row = mysqli_fetch_array($rows)){
	$symbolno = $row['symbolno'];
	$name = $row['sname'];
	$science = $row['science'];
	$maths = $row['maths'];
	$comp = $row['comp'];
	$nepali = $row['nepali'];
	$health = $row['health'];
	
	function calculatePercentage($science,$maths,$comp,$nepali,$health){
		$percentage=($science+$maths+$comp+$nepali+$health)/5;
		echo $percentage;
	}

	function calculateResult($science,$maths,$comp,$nepali,$health){
		if($science>=32 && $maths>=32 && $comp>=32 && $nepali>=32 && $health>=32){
			echo "Pass";
		}else{
			echo "Fail";
		}
		
	}


	echo "<tr>";

	echo "<td>";
	echo $symbolno;
	echo "</td>";
	echo "<td>";
	echo $name;
	echo "</td>";
	echo "<td>";
	echo $science;
	echo "</td>";
	echo "<td>";
	echo $maths;
	echo "</td>";
	echo "<td>";
	echo $comp;
	echo "</td>";
	echo "<td>";
	echo $nepali;
	echo "</td>";
	echo "<td>";
	echo $health;
	echo "</td>";
	echo "<td>";
	echo calculatePercentage($science,$maths,$comp,$nepali,$health);
	echo "</td>";
	echo "<td>";
	echo calculateResult($science,$maths,$comp,$nepali,$health);
	echo "</td>";
		
		
	echo "</tr>";

}
echo "<table>";

session_destroy();

?>
<br>
<a href="index.html" >Go Back TO Home</a>
</div>
</body>
</html>
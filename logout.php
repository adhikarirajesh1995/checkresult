<?php 
session_start();
if(session_destroy()){
	echo "<h2>you have successfully logged out</h2>";
	include('login.php');
}
 ?>
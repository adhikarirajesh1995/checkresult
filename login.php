<html>
<head>
	<title>this is login page</title>
	<script>
	function validateLogin(){
		var username = document.login.username;
		var password = document.login.password;
		if(username.value==""&& password.value==""  ){
			alert("Please enter field");
			return false;
		}
		return true;
	}
	</script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Login Page</h1><br>
<form name="login" method="post" action="loginverify.php" onSubmit="return validateLogin();">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="UserHelp" placeholder="Enter Username">
    <small id="userHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>	

	</div>
</body>
</html>
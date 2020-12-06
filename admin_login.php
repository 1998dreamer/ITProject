<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: #1E90FF;
		border: 10px solid #094198;
		border-radius: 15px;
	}
	body  {
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: #4AB8F9;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #4AB8F9;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #E6F2F8;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #094198;"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #094198;"><b>New Admin?</b></td>
				<td style="color: #094198;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="admin_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px;" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
</div>
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin panel</title>
</head>
<body data-spy="scroll" data-target="#menu">
    
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
	<div class="container-fluid">
		<a href="#" class="navbar-brand"><img style="width:80px; border:2px solid red; border-radius: 20px;" src="images/logo.jpg" alt="logo"></a>
		<p style="color:white;">welcome to the authorize panel</p>
		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-link" href="index.php">HOME</li>
				<li class="nav-link" href="#about">About</li>
				<li class="nav-link" href="#portfolio">Portfolio</li>
				<li class="nav-link" href="#testimonials">Testimonials</li>
				<li class="nav-link" href="#contact">Contact</li>
				
			</ul>
		</div> -->
	</div>
</nav>

    

    <div class="loginContainer">
        <div class="cover">
            <form action="admin_db.php" method="post">
                <div class="input">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="adminid" placeholder="Admin ID">
                </div>
                <div class="input">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="" value="Login">
            </form>
				<a href="admin_signup.php">new admin? sign up</a>
                <a href="admin_forgot_pwd.php">Forget Password</a>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html> 
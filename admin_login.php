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

<?php 
	include('path.php'); 
	include('app/controllers/users.php');
?> 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/buttons.css">
    <link rel="stylesheet" type="text/css" href="styles/create-account.css">
</head>
<body>
	<a href="<?php echo BASE_URL ?>" class="home">
        <img src="icons/icon-home.svg">
    </a>
    <main class="container">
        <div class="login-header">
            <h1 class="title">Create your account</h1>
            <p>Please fill out the form</p>
			<h3><?=$errMsg?></h3>
        </div>
            <form class="login-form" action="create-account.php" method="post">
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="login">Enter your login</label>
                        <input type="text" id="login" name="login">
                    </div>
                    <div class="form-item">
                        <label for="email">Enter email</label>
                        <input type="text" id="email" name="mail" value="<?=$email?>">
                    </div>
                    <div class="form-item">
                        <label for="password">Come up a password</label>
                        <input type="password" id="password" name="pass-first">
                    </div>
                    <div class="form-item">
                        <label for="repeatpassword">Сonfirm your password</label>
                        <input type="password" id="repeatpassword" name="pass-second">
                    </div>
                    <button type="submit" class="purple_button button-log" name="button-reg">Create account</button>
                </div>
        <footer class="footer-of-page">
            <h6>developed by Knyazev A.V. and Dombrovski G.I.</h6>
        </footer>
    </main>
</body>
</html>
<!-- <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckBox">
                            <label for="rememberMeCheckBox" id="checkboxlabel">Remember Me</label>
                        </div>
                    </div>-->
<!-- <div class="login-form-footer">
                    <a href="#">
                        <img src="icons/icon-facebook.svg">
                        Facebook Login
                    </a>
                    <a href="#">
                        <img src="icons/icon-youtube-black.svg">
                        YouTube/Google Login
                    </a>
                    <a href="new-account.html" class="createacc">
                        <img src="icons/icon-user-plus.svg">
                        Create Account
                    </a>
                </div>
            </form>  -->


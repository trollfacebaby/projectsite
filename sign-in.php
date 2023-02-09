<?php 
	include('path.php'); 
	include('app/controllers/users.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/buttons.css">
    <link rel="stylesheet" type="text/css" href="styles/sign-in.css">
</head>
<body>
	<a href="<?php echo BASE_URL ?>" class="home">
        <img src="icons/icon-home.svg">
    </a>
    <main class="container">
        <div class="login-header">
            <h1 class="title">Welcome to our service</h1>
            <p>Please login in your account</p>
			<h3 class="error"><?=$errMsg?></h3>
        </div>
            <form class="login-form" action="sign-in.php" method="post">
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="email">Enter email</label>
                        <input type="text" id="email" name="mail" value="<?=$email?>">
                    </div>
                    <div class="form-item">
                        <label for="password">Enter password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckBox">
                            <label for="rememberMeCheckBox" id="checkboxlabel">Remember Me</label>
                        </div>
                    </div>
                    <button type="submit" class="purple_button button-log" name="button-log">SIGN IN</button>
                </div>
                <div class="login-form-footer">
                    <a href="#">
                        <img src="icons/icon-facebook.svg">
                        Facebook Login
                    </a>
                    <a href="#">
                        <img src="icons/icon-youtube-black.svg">
                        YouTube/Google Login
                    </a>
                    <a href="create-account.php" class="createacc">
                        <img src="icons/icon-user-plus.svg">
                        Create Account
                    </a>
                </div>
            </form>
        <footer class="footer-of-page">
            <h6>developed by Knyazev A.V. and Dombrovski G.I.</h6>
        </footer>
    </main>
</body>
</html>
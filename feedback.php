<?php 
	include('path.php'); 
	include('app/database/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/buttons.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/header-in-feedback.css"> 
    <title>FEEDBACK</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=IOQOpYhHJrhyELwGSZk9DsGdN-c9hbzIYOQT1ZVuHEvkyC5XxZOidZutKFmlPy1dF64v9ATLf9g9rzwdGnszgjjkaUAZYbFlPiNbGyH8sDowAEoVauDhpxwqcy2xLFXhAsyOmQ1c4wK0DYJhntqyzz0FOI55nIFn0-qMUtF2LzraPYKBoMmfNzxx7wk4ZqPX2nE5uoI3MX7hC0B9ZbKyP-musBq7RF8yuvJjxjR9gf76PGvoHPWCu5XiqIYmWQB3mRYfqBVY6-fGztVT-BsuefIV3u7YEQcxWZlF1qHJ3j4eoWyvhq3kKFY4Y9BUMgoaRw41sk_tlqUJiJlIXoq2ZF76IVVZOBiyuSbHaWGvQD79R4O2t4f8tKdpCRN30rSf7ICBOSJkWvLp0X3LTclHdujRa7qFMx8GhRBCiqBzLjkHR41z-7v5sL6DHxiHbsxyWSddvwWpK4rrpX6R4gGkR9d7KA3BqGEdfHKabhF2q6_tVwoWfd8cSQH30-dim2GSdwMVMKQSy9A7NTuHWsjvLcACKGqpV73CV-8KZ7S3rlD68i_bX1T5iYDg5Q4P4QcIqoFrI08u1l5K-MjILT9rCzgC-w7Diu144Pvq6JMCldT2ia45nZPMA3CQ7Zztgmqodf94kmC9vnpOMpD3dZ8loBrybKLCSZBmjQ1xkPK-H9ji401b_-cCCPBIWKkVpJg44nm0qBT4onT1cppRcA4jmNOy69SYcsLG58Zk1iLynWDx10YytoxVxZtGT63ywED1RpB8Hngl6CwyHZkHzqyz5pi0_WGXVtAW1zsQEj5wVRfsvskvgob2cSvI18BmNx2Jm3aTqnHD00MwooCc8b15hSVmCm_O2E_Jyw5mgB7SBA-1pur0XUxNdIR2DXKjei7ysT1wgCbMfc1pRqiQYm-I_NzU7gg0IL4Pju2eYJJnX9aQp9fqyP7Op5w537tGQCDO9wdEMkcpb6S7dCuWKHK_KUbT_soQ9Rh4bVjm675W0IsTwotCwlyvJpwYLujx8h994qzXzb5ElJGCNS6NxJIM8RJgx-uiW9JMM--bkSJXtzYDTb1kFlnjGgaV_douVAAuMgfy-A66p78dWOXa6i-sK9ZmP9L-fsOaPSu8HCNJIy5dt_H6n5VgU73mL3nx5Uw-fqq_Nx-LUqSQT2v-8_FleWRHY9u7zdjP6k5KABfpLQiopTI_93CG5xSQgmrRwmLsJhl9nCO0hSvtSj9sWnWSe_HKLjBJtmgndW0HMarrjbuxFtpALTF2EC33LTlp6C2yWazYRGh83oFhIragX6JRfVa2MvIjf_rJ-Obxokx2fi_QQX9r__Lfn1x7vTnmsGlOx6me1HV0zvXjFMgQHxylLK5WvDpK_PuJTV0oVCla5joqOGMoiK-KbyObG0e8ZYL2ed-gHHFgUAXkP10hksa0vGxylXMSb4rtWLpV9eqq_kOYY0mn1okH9E8WgokZ-hP9-j8aFsu4eVzh2tN_mS83gdpShtLhaRMmyfmXh-Qvy_GsR-ArMlNnBo_APofOT8XFNZk97xbs6Xf9RAPpLgw8uVr0tuDEImrPGplXcVOpsVhZXQ1lhQBpd6b8PPwemH2va_U84NSxiQ-RtVUMkVBGql30E5uhtQDgdzkZIKGa380ixA5Jv8e70Bij0VpHtG2ieymRGCNks4zTK0yfWtLexMxf9SKZLncVAgZWYHWRrYlKD-fUf9g5X5kr_PcPE7V4" charset="UTF-8"></script></head>
<body>
    <header class="header">
        <div class="header-logo">
			<a href="<?php echo BASE_URL ?>">
                <img src="icons/icon-box (1).svg" class="header-logo-img">
                <span class="header-title">Name</span>
            </a>
        </div>

        <nav class="header-nav">
			<a href="<?php echo BASE_URL . "catalog.php"?>" class="header-link link-catalog">Сatalog</a>
            <div class="header-link-point"></div>
            <a href="<?php echo BASE_URL . "about-us.php"?>" class="header-link">About us</a>
        
            <div class="header-link-point"></div>
            <a href="<?php echo BASE_URL . "feedback.php"?>" class="header-link">Feedback</a>

        </nav>
		<?php if (isset($_SESSION['id_user'])): ?>
			<button class="purple_button header_button" onclick='window.location.href = "<?php echo BASE_URL . "logout.php"?>"'><?php echo $_SESSION['login']; ?></button>
		<?php else: ?>
			<button class="purple_button header_button" onclick="window.location.href = 'sign-in.php';">Sign in</button>	
		<?php endif; ?>	
    </header>
    <main class="container">
        <div class="center-container">
        <div class="follow-us">
            <h3 class="feedback-title-follow-us">FOLLOW US</h3>
            <span class="email">OUREMAIL@GMAIL.COM</span>
        </div>
        <div class="keep in touch">
            <h3 class="feedback-title">KEEP IN TOUCH</h3>
            <form class="feedback-form">
                <div>
                    <label class="feedback-name-input-container"><input type="text" placeholder="Your name">
                        <div></div>
                    </label>
                    <label class="feedback-email-input-container"><input type="text" placeholder="E-mail">
                        <div></div>
                    </label>
                </div>
                <div>
                    <label class="feedback-textarea-container">
                        <textarea placeholder="Leave your message"></textarea>
                        <div></div>
                    </label>
                    
                    <button type="submit" class="purple_button feedback-button">SEND</button>
                </div>
            </form>
        </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-info">
            <div class="footer-info-socials">
                <h3 class="footer-socials-title">FOLLOW US</h3>
                <div class="footer-socials-container">
                    <a href="#">
                        <img src="icons/icon-linkedin.svg">
                    </a>
                    <a href="#"><img src="icons/icon-instagram.svg">
                    </a>
                    <a href="#"><img src="icons/icon-youtube.svg">
                    </a>
                </div>
            </div>
            <div class="footer-info-links">
                <h3 class="footer-links-title">INFORMATION</h3>
                <div class="footer-links-container">
                    <a href="#"><span>About Fapster app</span></a>
                    <a href="#"><span>Resources</span></a>
                    <a href="#"><span>Privacy Policy</span></a>
                    <a href="#"><span>Get in Touch</span></a>
                    <a href="#"><span>We are hiring!</span></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
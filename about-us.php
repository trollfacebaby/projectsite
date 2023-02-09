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
    <link rel="stylesheet" type="text/css" href="styles/about-us-header.css">
    <link rel="stylesheet" type="text/css" href="styles/about-us.css">
    <title>About Us</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=WefYuiHWriy2VjjkX87MCDLENYIDh3NpLJmaI3j7YJ_a7qRVf-5EvMU2SuZLzAtfrp2APTqG_wuVHsocmFUd6EoQAclyNFw98VHhxZxAHkQ8uYvC4kXuMyUTz4oZU_Sp3TlHL8EE1F-bwNwsWBCSQevCDsElHFOl9QuVPa-0hJb9ToJxCxlTIufdaQp1n45CvmY26jsO8nWnH7Ufu0mEbEIU2TS6OntQjdPP4MPu1dFoBpAFAcc-H8wnqR0dzUj0f5KOrs9OAJV4XySq3tHKJ0muPS47ETyaqXAB7DuwyJlhQqI59NjuG02VZMLFh3JrOqcsclSbGr7rikdwWvc6xNLwnwwmUI0kTCwoRuKwFsyDKGKJ-TTym-jIXSLjlYS6JQd84Wi2nMdh2alaUfXTWinnkoY4ViG5B2y-5ZMsMH6P1wGjvztHCe8BjSJk7KDQvD1SKK-MpzZqa7iItJZO5t7rmsMoY4isp9Vc7YxGV1cUSGr40oaoUSCneiU16O9fhFqMxyuBm7Fqz5DcOsAKUr_tNGwoYTK1tuZhzTIVB_iZlKIQ1xu9yG0wydUqpuFc8ChKcfqR4MdJJS1jIkNcBkCJFQpd9AwoMAGExFGiyuclNLcQJjK_Xsz9eCq-xKesAdTa8IZP68MkL44EDWOGhkl6x8jduF-r5UjyENMnJQeHGynyfaly0VSj3etxCOM0dDRkVKm1_SLBZqK15JSfL4b3dKjyCZOcpBoChYMrmcsrCfe8SajDAKWzEvK3Y1BlqwGRtWDKbfKMl7NvWgcfrQtwpWXUlWNj6Jl90jkkF1LD_UHKCDiDH4ZP6qpMAvZGgfi6HOZluRdGVUuhWo7vgT0JyVoOI_UKeGNRsmdtujZVyKTn4lD0tTEzEaif4-WxgXOiwE1XTwEEOWxYR4PlTDuuUhgXrckHT4AlfgoTJVdGtyC1RULKus9n45WI_sI8rW5td_cHf07CdNv6wad1AJQRof872MrtJaE46fJKkykhQ9kSQiWj3jY1WjEBryxxKC7DWM7xx6Lvnf94E4HWEer6eTMuEiciQdPa-LPw7f4U1UZdDw3LTIBkvINBQ1ZOsMNw2Vr2kUnO2xWTQobysAu6hUXCBhijwhNgOO5Vnk8dGnVAjstNz0stUeLU_PTZOlbGJkU8WviEuDVQKHlUqDXc_HEj1Z66Yxs-h2qik74pOn08tjJ8qHbtHAtVdAD2S1gXJTlqLHolp_2Ug8BSU7r_6DWoJVs3xj5dreFcdvnNkQUl6ISRfPEnT7EImexgztNMoxRqkABPZaTSCW74c9w9tAgak3pa1VqZi6xMi2-nNYJgvyftO1CjG7JXW8YrwnCmhWtDiPivh_oHd6w6KZe3FrXsjH0dtOYqARRpSJd8BI-0SUVV-RkMis2POS19unUqikAZelgUHCwEAvQbzcx47bekcjVujpsf4L5Cx7GFcPyxxpQ_35id4CqlzC00hVSB32eGT-BUBRx8-9m2UqdawnTMpVYXCRiO5om7Bj_ttfVtK0S8J4yAi3cDo62VJTd7CvZK0mYAV8zvlhkWpYb0JXETqaTEM5gsocvrwfPnDKr0QBkElSW1cYuTWrch" charset="UTF-8"></script></head>
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
        <div class="content-container">
        <div class="description">Данный сайт - проект учеников 11"к" класса - Князева Александра и Георгия Домбровскогоsgdfhgsdhjfgsdgfgsdjhgfhsgdhfgshdjfghsdgfhgsdjhfgsdfhsdjhfgsdgfgsdhjfghsjdgfjhgsdjhfgausdgugfudfsgu</div>
        </div>
    </main>
</body>
</html>
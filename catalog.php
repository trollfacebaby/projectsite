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
    <link rel="stylesheet" type="text/css" href="styles/catalog-main.css">
    <link rel="stylesheet" type="text/css" href="styles/header-catalog.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <title>Catalog</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=uBnti-FzJjrw2USNDBl0hcx39XoXK91sqYqBCHboBnF3m3pOINDpIfchZjw_BPuID1L3-gCbX2456NjHWib7ooK0hRwwu-qMqEeN65RKDQ8iCQpCSwKwq9Kr4khTYGMg7vtR6LSszTN8TL43DTRfZxh2tNQLWAMruOpnBZ4X1GcrTBlZgntr-WpJRGFSx-HfcsljNooP8x0IWAp4_Gn1i4WD8C4ZSAzgndZGjeRCmBqu3H7_dW2AqItunE0VVb5PE0poVZNe2YJYjoi10XPtSE3a687BtLrBiTktG85joaqJBvPBrzSl-HESS8TXEDhKD_t0XnMT45NQ1vwjAXaHYiu3q2Nls4QyKnWbygN1--vOGoLdhcWVrjUf4Ge6P9jOp6NflKRTX2nNjVz_6UE7oaPHfwZAs3AseV7vKRVtiNP7whMtJ_oP4TuSFCUolJG0WnAV7BOQrcdRg3lRkaL3Ko4WSnzwbU3JRdDw5k2MHJ6Ma95RyRAno7xVcUjyGsW8gLL4IDUEET6uiNS2SoqORfh9aOfdI_WY3NaOxchsJpxnxdr_rNoeZp6nfDcpJ8eH4unjL5ckt3-gARaiI3Hf_1wnfFxp9Ux35YBoIXVWYYcHR9JkM8cYCualKUd17UzqqCsZQihM00UHRa3Hd2nusmAL0fLHJI-73sXgx_gauvXl8ZRkjA0UrRQvIE4LsLkDKibIiGCV2QoBdT514v9bo9PBc17W_hy9axIHZlXrjg6wdUlHcRiDe1KXsipJ8QnZk1qenVtGda111WE-s3I0ecfIOvTfD-Xh8ZSHuKnOsufCGWWF4IyB32NC4btv7aFNFdRBWurfsvGDGp9osiF5Gm3iWFyXZmtczpmHOVWJyhFxztschY44lKh7CBBSiVCef5YW1KogmM9RxGafxRSby2NW3vakxoL-elkWiEu84OiZvv4I5qjmhTdsuyJAUNf98d7qY-HO1EueuqPhO9rPPzARjFQhz7YfhttVWH2UE7VUeh9p8NHwrvIFoX9bsBQJwi55JlOYHi3QmvPAWan7GdW40D-O3-QTCpsGZkItkD8ACwUPBwcIaNbSr6VJ__P5ZkbafKfmnZdklCvjbt7e9cXoZyZzIJMWvW5Z55yYnIYeNSe0e38M89EEd9C6bnAFXy5DnGGIRVMpBSXRUl3hQMqE7hPVwUPGIAlRUf0wQVYtjMJKPrI-nDUrTsqt0PFyIpBQ1h723t2pkjFEolxIyrS-0Yh_3uDGp4342ryJ5tGeTtg-qp7xXIzRfrUs7a69rqOBe0ltUS_YtdhhwbfdLOaWk8_8OKkao7PpKD9jJMVAq_mP1doLEvKseQw0oqcnTUgdtNy33uyj_Q3s0aWl9HTtLbXyk3HZpv3CLyTFy7OL12URZofrThokQPghq-ShZkmmvqg0izcdcdO7oGgELgHFcSe6sr4D41tL64vmTeuBfG2BUHivjmCgsKq4NdzCt2i1VixM-fnnA0MmgDndQ3MRCL3Eb9_VtrfYJr7pGRLDgfjg1as_bY4CTYT1qvxPX6HYUAgldTwk3GGGN54tuS-KJ9LkYywny0y-_AOjpGiIAER63sefr7tQ6LHRVqbZ" charset="UTF-8"></script></head>
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
        <div class="title">Our products</div>
        <div class="content-row1">
            <div class="product1">
                <a href="<?php echo BASE_URL . "product-page.php"?>"><img src="photos/product1.jpg" class="img-of-product"></a>
                <a class="link-product">Название товара</a>
            </div>
            <div class="product2">
                <img src="photos/product2.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
            <div class="product3">
                <img src="photos/product3.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
        </div>
        <div class="content-row2">
            <div class="product1">
                <img src="photos/product4.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
            <div class="product2">
                <img src="photos/product5.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
            <div class="product3">
                <img src="photos/product6.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
        </div>
        <div class="content-row3">
            <div class="product1">
                <img src="photos/product7.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
            <div class="product2">
                <img src="photos/product8.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
            <div class="product3">
                <img src="photos/product9.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
        </div>
        <div class="content-row4">
            <div class="product1">
                <img src="photos/product10.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
            </div>
            <div class="product2">
                <img src="photos/product11.jpg" class="img-of-product">
                <a class="link-product">Название товара</a>
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
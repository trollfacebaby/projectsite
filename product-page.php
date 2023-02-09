<?php 
	include('path.php'); 
	include('app/database/db.php');
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Демо Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="styles/carousel.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/buttons.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/header.css"> 
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=NQ77ztERAYYD0zPLEkpSq2ac638lGJfWkkPI2bpIITBan-wIPSK_NskHCb8s-cbRiIr9xS15th1JCu4sZBMULv-repAdctj_hxaRO28js2pRds4YYS3TNFHoXfsMJ1qC1p9al2v0F1JjHvLUEr9Ee-pRNITLe4dXqeRVGpjRZMeORcq9xB1zkXJaJbRiHhlwy0HKm6TEOrxzf7RFDdxnG8HCCT7aHrEGfaTYbQumz4wTrnLh-SccVNVDV68460al6FKhM8c3nBfgGAaQmhmNnA8Uf9HtIXqzXDnW6Z4DJhpdsF72gLpypr9KAa_lpNnXXJwOBXjECpDXFLzygAdcO5A77Mtpv-kl-V_jgY__RFIF_qLgXaK3ZOg5A_vIYU0nkiR0sy3CtS4PA3rWNZ7nO5t7rsTjWh8TsePpKzekJB3rYfssc22ur5J5qFo74LwuhM8wakUKIQXjWHpeEELspTP7KqVYmLBt6bD4TPAYiqO2CgWdcU1iA4X2SkjqJb2fFLyag0_wrShZ9utsl5e5aEfneQ5JdNoxwx4gYY6zKoSjf5ZQCCQa_jQnr3XSKKtyjiU9W-vRzQKzPCE3zZHn9GiX42GrBtYR7WZQobl6q-nqc6D5QZ8jPv9pcjCqQ9pV_Q-XMhNqA7FggS13RfhapZxeosgqTaPHmHVauDX1fPtNF9AwogRzH4l9mP-Iia2k9b2X-2gZSdV34vTfACc6wlEjkBBWGKpXjydCLoAfWt8AUJgrQaJa0AWR57g4bEoepOUiiVSjMcWq8fljiFOY5Rm7csOgYDvvxFGbvn-beR9fooq7COOT4mVwHb9ZheDvG6j4hhVhkVqpOSCh2MscxbjEPn0jlDpW5BW_2kAARgGS5c0IbEOsH-x-_vhIcDEg0nRy6YRyu3mv4Bd3cUV1GNhbMd1abV8V1ZyFCDl8ruoojrLelXQCzBFCMwwUHynxbnrLIIB0Ju6sJ2Jq8-if3XPoy32L_CFV7CeNdCs8KHLQZ2NianUIbl8AmZsmvxnzs6J7nEk8DgqTN0-X8cm1xJueZrG4HcCDs1IfmDAPv9gEuCbykQcWw6IJ-IBMCg4pbcJegzJFlT9lDQuKpDSdHXdgXPNhOgKBfZO1xTQb_soOrgdsApjf2Iy3r3RQclntnVfbmSKt3x6G6AlReRFgudW-uCc40XZfW1npE_G0Eu31ulaSGxmEm_fhvljABxDhiGXQ55_Ms13RPXMtoYYmZXqTpqTCUe3u7VyF5cPIAfywSQ_GtOGyR-R0M6AvaDQypo_FQuSv3ver4X_BP0VsPwasoLpdjeOfjuRAfhuP-xPx4uNFTUlG_53BVfVomsJnUbwl4YTnrwyNk7CwG957gon_HmH2ZXQGBEplOFH3vNxjCn8-3OUWLZZYKcJyHszXEClV3J5__s3AzMkiS6E44boNHW5aq1Rpt9bdkKSvpG9IIfBSpILs1LvH9-9W2O0nLLAKZfdAbNa1gd-w1ev0IoGynbz4JOQr08Vn94XYxFgECJkSidBE1vzKfFfIJP1dJ_8Omq5UEZN1ws6ewRmo9nnV8NjyjB3RTRY_wp7U5Ei71QVjhcggMwyyogyXwl8gS7Fde1b3MCFDoO5XcfQaVaEi4vaJONIiumZIJmmonaHkJUoiB4GwNMcUsrxBqvJsAkctumbuyvk_fQzjmBvIFRY5dk7CEt1V9GzXEmP5Qvtxq9t6mVBlPRwz_3rb3WJa" charset="UTF-8"></script></head>
  <body>
    <!-- < header -->
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
  <!-- header end -->
    <!-- Slideshow container -->
<main>
  <div class="container-product-page">
    <div class="container-for-carousel">
      <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="photos/product2.jpg" style="width:100%"  class="img-carousel">
      
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="photos/product2.jpg" style="width:100%" class="img-carousel">
      
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="photos/product2.jpg" style="width:100%" class="img-carousel">
      
        </div>

    <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
  
    <br>

<!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>
    <div class="right-page">
    <div class="description">
      <h1>Название товара</h1>
      <h4>Описание</h4>
      <p>sdhfshdkfjhsdfjhkdsjhfsui</p>
    </div>
    <div class="price">Цена: 1999р</div>
    <button class="purple_button buy-button">Приобрести</button>
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
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
  </body>
</html>
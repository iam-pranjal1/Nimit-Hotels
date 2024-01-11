<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nimit Hotel's</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <?php require('components/links.php');?>

    <link rel="stylesheet" href="CSS/Testinomials.css" />
    <link rel="stylesheet" href="CSS/Reach-us.css" />

    <style>
      .avalabilit-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px) {
        .avalabilit-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
  </head>

  <body class="bg-light">
    <!-- Navbar Start -->
    <?php require('Header.php');?>
    <?php require('components/LoginModal.php');?>
    <?php require('components/RegisterModal.php');?>

    <!-- Swiper -->
    <?php require('components/Carousel.php');?>

    <!-- Check Avalability -->

    <?php require('components/Check-Availability.php');?>

    <!-- Our Rooms -->

    <?php require('components/Our-Rooms.php');?>
    <!-- Our Facilites -->

    <?php require('components/Our-Facilities.php');?>
    <!-- Testinomials -->
    <?php require('components/Testinomials.php');?>
    <!-- Reach Us -->

    <?php require('components/Reach-us.php');?>
    <?php require('components/Footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var swiper = new Swiper(".swiper-testinomials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "3",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },

        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: "1",
          },
          640: {
            slidesPerView: "1",
          },
          768: {
            slidesPerView: "2",
          },
          1024: {
            slidesPerView: "3",
          },
        },
      });
    </script>
  </body>
</html>

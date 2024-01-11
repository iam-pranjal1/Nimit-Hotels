<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="./CSS/Common.css"/>

  <style>
    .box {
      border-top-color: aqua !important;
    }
  </style>
</head>

<body>
  <?php require("./Header.php") ?>
  <?php require('components/LoginModal.php'); ?>
  <?php require('components/RegisterModal.php'); ?>

  <?php
  $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($q, $values, 'i'));
  ?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">About Us</h2>
    <div class="h-line"></div>
    <p class="text-center mt-3">
      <?php echo $contact_r['site_tittle'] ?>
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1">
        <h3 class="mb-3">Who We Are</h3>
        <p>
          <?php echo $contact_r['site_about'] ?>
        </p>
      </div>

      <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2 order-md-2">
        <img src="./images/about/about.jpg" class="w-100" alt="" />
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./images/about/hotel.svg" width="70" alt="" />
          <h4 class="mt-3">100+ Rooms</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./images/about/customers.svg" width="70" alt="" />
          <h4 class="mt-3">200+ Customers</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./images/about/rating.svg" width="70" alt="" />
          <h4 class="mt-3">150+ Review</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./images/about/staff.svg" width="70" height="40px" alt="" />
          <h4 class="mt-3">200+ Professional Staff</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

  <div class="container px-4">
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <?php
        $about_r = Select_all('team_details');
        $path = ABOUT_IMG_PATH;
        while ($row = mysqli_fetch_assoc($about_r)) {
          echo <<<data
                    
                    <div class="swiper-slide bg-white text-center overflow-hidden  rounded">
                        <img src="$path{$row['picture']}" class="w-100" alt="{$row['name']}" />
                        <div class="mt-50">
                            <h5>{$row['name']}</h5>
                        </div>
                    </div>
                data;
        }
        ?>
      </div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <?php require("./Components/Footer.php") ?>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true, // Enable clickable pagination bullets
      },

      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
      href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="CSS/Common.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  <style>
    .h-line {
      width: 150px;
      height: 1.7px;
      margin: 0 auto;
      background-color: #000; /* Specify the color for the line */
    }

    .my-5 {
      margin-top: 5rem; /* Adjust the top margin as needed */
    }

    .px-4 {
      padding-right: 1rem; /* Adjust the right padding as needed */
      padding-left: 1rem; /* Adjust the left padding as needed */
    }

    .text-center {
      text-align: center;
    }

    .fw-bold {
      font-weight: bold;
    }

    /* Define the font class if needed */
    .h-font {
      font-family: 'Your Font Here', sans-serif; /* Specify the desired font */
      /* Additional font styles can be added as needed */
    }
    .pop:hover{
        border-top-color: red !important;
        transform: scale(1.03);
        transition: 0.3s;

    }
  </style>
</head>
<body>
<?php require("./Header.php") ?> 
<?php require('components/LoginModal.php');?>
    <?php require('components/RegisterModal.php');?>
  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">Our Facilities</h2>
    <div class="h-line"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, praesentium.</p>

  </div>

  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2 ">
                    <img src="./images/facilities/IMG_43553.svg" width="40px" alt="wifi">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2 ">
                    <img src="./images/facilities/IMG_43553.svg" width="40px" alt="wifi">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2 ">
                    <img src="./images/facilities/IMG_43553.svg" width="40px" alt="wifi">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2 ">
                    <img src="./images/facilities/IMG_43553.svg" width="40px" alt="wifi">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2 ">
                    <img src="./images/facilities/IMG_43553.svg" width="40px" alt="wifi">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2 ">
                    <img src="./images/facilities/IMG_43553.svg" width="40px" alt="wifi">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>

        
    </div>
  </div>
  <?php require("./Components/Footer.php") ?> 
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nimit Hotel's-Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="./CSS/Common.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<style>
  :root {
    --teal: #279e8c;
    --teal_hover: red;
  }

  * {
    font-family: "Poppins", sans-serif;
  }

  .custom-bg {
    background-color: var(--teal);
  }

  .custom-bg:hover {
    background-color: var(--teal_hover);
    border-color: 1px solid var(--teal_hover);
  }
</style>

<body>
    <?php require("./Header.php") ?>
    <?php require('components/LoginModal.php'); ?>
    <?php require('components/RegisterModal.php'); ?>

    <div class="my-5 px-4">
        <h2 class="text-center fw-bold h-font">Rooms</h2>
        <div class="h-line"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
            praesentium.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-lg-0 col-md-12 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light shadow-effect shadow rounded">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse flex-column" id="filterDropdown">
                            <div class="border mb-3 p-3 bg-light rounded mt-2">
                                <h5 class="mb-3" style="font-size: 18px">
                                    Check Availability
                                </h5>
                                <label class="form-label">Check-In</label>
                                <input type="date" class="form-control shadow-none mb-3" />
                                <label class="form-label">Check-Out</label>
                                <input type="date" class="form-control shadow-none mb-3" />
                            </div>

                            <div class="border mb-3 p-3 bg-light rounded mt-2" style="width: 100%">
                                <h5 class="mb-3" style="font-size: 18px">Facilities</h5>

                                <div class="mb-2 ml-4">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" />
                                    <label class="form-check-label" for="f1">Facility One</label>
                                </div>

                                <div class="mb-2 ml-4">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none" />
                                    <label class="form-check-label" for="f2">Facility Two</label>
                                </div>

                                <div class="mb-2 ml-4">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none" />
                                    <label class="form-check-label" for="f3">Facility Three</label>
                                </div>
                            </div>

                            <div class="border mb-3 p-3 bg-light rounded mt-2" style="width: 100%">
                                <h5 class="mb-3" style="font-size: 18px">Guest</h5>
                                <div class="d-flex mb-md-3 mb-lg-0 mb-3">
                                    <div class="mr-3">
                                        <label class="form-label">Adult</label>
                                        <input type="number" class="form-control shadow-none" min="0" />
                                    </div>

                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none" min="0" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 mt-lg-0 mt-4 ">
                <div class="card mb-4 border-0 shadow shadow-effect">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 mb-lg-0 mt-lg-0 mt-4 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded " alt="" />
                        </div>
                        <div class="col-md-4 mt-1">
                            <h5 class="mb-2">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-2">Features</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Balcony
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <div class="facilities mb-3">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Geyser
                                </span>
                            </div>

                            <div class="guest">
                                <h6>Guest</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    5 Adult
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹ 2000/Night</h6>
                            <div class="d-flex mb-md-3 mb-lg-0 mb-3 flex-column align-items-center">
                                <a href="#" class="btn btn-sm px-3 btn-outline-dark mb-2 text-dark custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow shadow-effect">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 mb-lg-0 mt-lg-0 mt-4 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded " alt="" />
                        </div>
                        <div class="col-md-4 mt-1">
                            <h5 class="mb-2">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-2">Features</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Balcony
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <div class="facilities mb-3">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Geyser
                                </span>
                            </div>

                            <div class="guest">
                                <h6>Guest</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    5 Adult
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹ 2000/Night</h6>
                            <div class="d-flex mb-md-3 mb-lg-0 mb-3 flex-column align-items-center">
                                <a href="#" class="btn btn-sm px-3 btn-outline-dark mb-2 text-dark custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-4 border-0 shadow shadow-effect">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 mb-lg-0 mt-lg-0 mt-4 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded " alt="" />
                        </div>
                        <div class="col-md-4 mt-1">
                            <h5 class="mb-2">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-2">Features</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Balcony
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <div class="facilities mb-3">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Geyser
                                </span>
                            </div>

                            <div class="guest">
                                <h6>Guest</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    5 Adult
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹ 2000/Night</h6>
                            <div class="d-flex mb-md-3 mb-lg-0 mb-3 flex-column align-items-center">
                                <a href="#" class="btn btn-sm px-3 btn-outline-dark mb-2 text-dark custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow shadow-effect">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 mb-lg-0 mt-lg-0 mt-4 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded " alt="" />
                        </div>
                        <div class="col-md-4 mt-1">
                            <h5 class="mb-2">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-2">Features</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Balcony
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    3 Sofa
                                </span>
                            </div>

                            <div class="facilities mb-3">
                                <h6 class="mb-2">Facilities</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    Geyser
                                </span>
                            </div>

                            <div class="guest">
                                <h6>Guest</h6>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    5 Adult
                                </span>
                                <span class="badge text-bg-light text-secondary text-dark text-wrap">
                                    4 Children
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹ 2000/Night</h6>
                            <div class="d-flex mb-md-3 mb-lg-0 mb-3 flex-column align-items-center ">
                                <a href="#" class="btn btn-sm px-3 btn-outline-dark mb-2 text-dark custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require("./Components/Footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
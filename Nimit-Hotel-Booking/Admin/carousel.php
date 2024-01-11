<?php
require("./inc/essentials.php");
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Carousel</title>
    <?php require("./inc/links.php"); ?>
    <link rel="stylesheet" href="./CSS/admin-Common.css" />
    <style>
        .no-spinners::-webkit-inner-spin-button,
        .no-spinners::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    </style>
</head>

<body class="bg-light">
    <?php require("./inc/Admin-header.php"); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4">
                <h3 class="mb-4">Carousel</h3>

                <!-- Carousel Settings -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="align-items-center justify-content-between d-flex mb-3">
                            <h5 class="card-title m-0">Carousel Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#carousel-s">
                                <i class="bi bi-person-fill-add"></i>Add</i>
                            </button>
                        </div>

                        <div class="row" id="carousel-data">

                        </div>
                    </div>
                </div>

                <!-- Carousel Modal -->
                <div class="modal fade" id="carousel-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form id="carousel_s_form" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Carousel Image</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Carousel's Picture</label>
                                        <input type="file" accept="image/jpeg, image/jpg, image/png, image/webp" name="carousel_pic" id="carousel_pic_inp" class="form-control shadow-none" required />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-dismiss="modal">Cancel</button>
                                    <button type="submit" onclick="add_carousel()" class="btn custom-bg text-white shadow-none" data-dismiss="modal">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- ... (include other necessary scripts) -->

    <script src="Scripts/settings.js"></script>
    <script src="Scripts/carousel.js"></script>
    <?php require("../Admin/Scripts/Scripts.php") ?>
</body>

</html>

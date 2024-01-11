<?php
require("./inc/essentials.php");
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Settings</title>
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
                <h3 class="mb-4">Settings</h3>

                <!-- General Settings -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="align-items-center justify-content-between d-flex mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#general-s">
                                <i class="bi bi-pencil-square">Edit</i>
                            </button>
                        </div>

                        <h6 class="card-subtitle mb-2 mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_tittle">Your Site Title Content</p>

                        <h6 class="card-subtitle mb-2 mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about">Your About Us Content</p>
                    </div>
                </div>

                <!-- General Settings Modal -->

                <div class="modal fade" id="general-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label  fw-bold">Site Tittle</label>
                                        <input type="text" name="site_tittle" id="site_tittle_edit" class="form-control shadow-none" required />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About</label>
                                        <textarea type="text" name="site_about" id="site_about_edit" class="form-control shadow-none" row="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" onclick="site_tittle.value =  general_data.site_tittle, site_about.value =  general_data.site_about" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none" data-dismiss="modal">Save changes</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

                <!-- shutdown section -->

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="align-items-center justify-content-between d-flex mb-3">
                            <h5 class="card-title m-0">Shut-Down Website</h5>
                            <form>
                                <div class="form-check form-switch">
                                    <input class="form-check-input " type="checkbox" onchange="update_shutdown(this.value)" id="shutdown-toggle">
                                </div>
                            </form>
                        </div>
                        <p class="card-text">Booking Not Allowed While ShutDown Mode Is On.</p>
                    </div>
                </div>

                <!-- Contact Us section -->

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="align-items-center justify-content-between d-flex mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#contact-s">
                                <i class="bi bi-pencil-square">Edit</i>
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address">Your Site Title Content</p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">Goggle Maps</h6>
                                    <p class="card-text" id="gmap">Your Site Title Content</p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">Phone Number</h6>
                                    <p class="card-text" id="phone"><i class="bi bi-telephone-fill"></i> <span id="phone1"></span> </p>
                                    <p class="card-text" id="phone"><i class="bi bi-telephone-fill"></i> <span id="phone2"></span> </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">Email</h6>
                                    <p class="card-text" id="email">Your Site Title Content</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">Scocial-Media Links</h6>
                                    <p class="card-text" id="social-media-links"><i class="bi bi-facebook me-1"></i> <span id="fb"></span> </p>
                                    <p class="card-text" id="social-media-links"><i class="bi bi-twitter me-1"></i> <span id="tw"></span> </p>
                                    <p class="card-text" id="social-media-links"><i class="bi bi-instagram me-1"></i> <span id="ig"></span> </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- Contact  Settings Modal -->

                <div class="modal fade" id="contact-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <form id="contact_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Details Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label  fw-bold">Address</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required />
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label  fw-bold">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required />
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label  fw-bold">Phone Number </label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" class="no-spinners" name="phone1" id="phone1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group  mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" class="no-spinners" name="phone2" id="phone2_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label  fw-bold">Email</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control shadow-none" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label  fw-bold">Social Media Links </label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-facebook me-1"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-twitter me-1"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-instagram me-1"></i></span>
                                                        <input type="text" name="ig" id="ig_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label  fw-bold">iframe Src Link</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" onclick="contacts_inp(contacts_data)" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none" onclick="update_contacts()" data-dismiss="modal">Save changes</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>


                <!-- Team Managment Settings -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="align-items-center justify-content-between d-flex mb-3">
                            <h5 class="card-title m-0">Team Managment Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#team-s">
                                <i class="bi bi-person-fill-add"></i>Add</i>
                            </button>
                        </div>

                        <div class="row" id="team-data">

                        </div>
                    </div>
                </div>


                <!-- Team Managment Modal -->

                <div class="modal fade" id="team-s" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Team Members</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label  fw-bold">Member Name</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Member's Picture</label>
                                        <input type="file" accept="image/jpeg, image/jpg, image/png, image/webp" name="member_pic" id="member_pic_inp" class="form-control shadow-none" required />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" onclick="site_tittle.value =  general_data.site_tittle, site_about.value =  general_data.site_about" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none" onclick="add_member()" data-dismiss="modal">Save changes</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>

            </div>




        </div>
    </div>
    </div>

    <!-- <?php require("./Scripts/Scripts.php"); ?> -->
    <?php require("../Admin/Scripts/Scripts.php") ?>

    <script src="Scripts/settings.js"></script>
</body>

</html>
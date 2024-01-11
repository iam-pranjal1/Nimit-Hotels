<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nimit Hotel's-Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="CSS/Common.css" />

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
  <?php require("./Header.php"); ?>
  <?php require('components/LoginModal.php'); ?>
  <?php require('components/RegisterModal.php'); ?>



  <?php
  $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($q, $values, 'i'));

  ?>


  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">Contact Us</h2>
    <div class="h-line"></div>
    <p class="text-center mt-3">
      We are pleased to assist you
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-5 mb-5 px-4 ">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100" height="300" src="<?php echo $contact_r['iframe'] ?>"></iframe>

          <h5>Address</h5>
          <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
          </a>

          <h5 class="mt-4">Connect Us</h5>
          <a href="tel: +<?php echo $contact_r['phone1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['phone1'] ?></a>
          <br />
          <?php
          if ($contact_r['phone2'] != '') {
            echo <<<data
                <a href="tel:+{$contact_r['phone2']}" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +{$contact_r['phone2']}</a>
                <br/>
          data;
          }
          ?>
          <?php
          if ($contact_r['email'] != '') {
            echo <<<data
                <a href="mailto:{$contact_r['email']}" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-at-fill"></i>{$contact_r['email']}</a>
          data;
          }
          ?>
          <h5 class="mt-4">Follow Us</h5>
          <?php
          if ($contact_r['fb'] != '') {
            echo <<<data
                    <a href="$contact_r[fb]" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br />
                data;
          }
          ?>
          <?php
          if ($contact_r['tw'] != '') {
            echo <<<data
                    <a href="$contact_r[tw]" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br />
                data;
          }
          ?>
          <?php
          if ($contact_r['tw'] != '') {
            echo <<<data
                    <a href="$contact_r[ig]" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                    <br />
                data;
          }
          ?>
        </div>
      </div>

      <div class="col-lg-6 col-md-5 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <form method="POST">
            <h5>Send A Message</h5>
            <div class="mt-2">
              <label class="form-label">Name</label>
              <input name="name" required type="text" class="form-control shadow-none" />
            </div>
            <div class="mt-2">
              <label class="form-label">Email address</label>
              <input required name="email" type="email" class="form-control shadow-none" />
            </div>
            <div class="mt-2">
              <label class="form-label">Phone Number</label>
              <input required name="phone" type="tel" class="form-control shadow-none" />
            </div>
            <div class="mt-2">
              <label class="form-label">Subject</label>
              <input required name="subject" type="text" class="form-control shadow-none" />
            </div>

            <div class="mt-2">
              <label class="form-label">Message</label>
              <textarea required name="msg" class="form-control shadow-none" rows="7" style="resize: none;"></textarea>
            </div>
            <div class="text-center my-1">
              <button name="send" class="btn mt-3 rounded text-white shadow custom-bg">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <?php
  require("Admin/Scripts/Scripts.php");

  if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `contact_us`(`name`, `email`, `phone`, `subject`, `msg`) VALUES (?,?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['email'], $frm_data['phone'], $frm_data['subject'], $frm_data['msg']];
    $res = insert($q, $values, 'ssiss');

    if ($res == 1) {
      alert('success', 'Send Successfully!');
    } else {
      alert('error', 'Something went wrong while submitting');
    }
  }
  ?>
  

  <?php require("./Components/Footer.php") ?>
</body>

</html>
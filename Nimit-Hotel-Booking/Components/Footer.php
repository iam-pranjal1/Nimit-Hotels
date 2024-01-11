<?php
$q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($q, $values, 'i'));

$q = "SELECT * FROM `settings` WHERE `sr_no`=?";
$values = [1];
$about_r = mysqli_fetch_assoc(select($q, $values, 'i'));

?>

<div class="container-fluid bg-white mt-5 mb-1">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2"><?php echo $about_r['site_tittle'] ?></h3>
      <p>
        <?php echo $about_r['site_about'] ?>
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block text-decoration-none mb-2 text-dark">Home</a><br />
      <a href="Rooms.php" class="d-inline-block text-decoration-none mb-2 text-dark">Rooms</a><br />
      <a href="Facilities.php" class="d-inline-block text-decoration-none mb-2 text-dark">Facilites</a><br />
      <a href="About.php" class="d-inline-block text-decoration-none mb-2 text-dark">About Us</a><br />
      <a href="contact.php" class="d-inline-block text-decoration-none mb-2 text-dark">Contact Us</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow Us</h5>
      <?php
      if ($contact_r['fb'] != '') {
        echo <<<data
                    <a href="$contact_r[fb]" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br />
                data;
      }
      ?>
      <br />
      <?php
      if ($contact_r['tw'] != '') {
        echo <<<data
                    <a href="$contact_r[fb]" class="d-inline-block mb-2">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br />
                data;
      }
      ?>
      <br />
      <?php
      if ($contact_r['ig'] != '') {
        echo <<<data
                    <a href="$contact_r[ig]" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>

                data;
      }
      ?>
    </div>
    <h6 class="text-center bg-dark text-white p-3 m-0">
      Designed & Developed By Nimit Technology
    </h6>
  </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  function setActive() {
    let navbar = document.getElementById("nav-bar");
    let a_tags = navbar.getElementsByTagName('a');

    for (let i = 0; i < a_tags.length; i++) {
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if (document.location.href.indexOf(file_name) >= 0) {
        a_tags[i].classList.add('active');
      }
    }
  }

  setActive(); // Ensure to call the function after defining it.
</script>
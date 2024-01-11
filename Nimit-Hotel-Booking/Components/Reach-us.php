<?php
$q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($q, $values, 'i'));

?>


<h2 class="mt-4 mb-4 pt-4 text-center fw-bold h-font">Reach Us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 rounded shadow-effect">
      <iframe class="w-100" height="300" src="<?php echo $contact_r['iframe'] ?>"></iframe>
    </div>

    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 mb-4 rounded">
        <h5>Connect Us</h5>
        <a href="tel: +<?php echo $contact_r['phone1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['phone1'] ?></a>
        <br/>
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
      </div>
      <div class="bg-white p-4 mb-4 rounded">
        <h5>Follow Us</h5>
        


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
        if ($contact_r['ig'] != '') {
          echo <<<data
                  <a href="$contact_r[tw]" class="d-inline-block mb-3">
                      <span class="badge bg-light text-dark fs-6">
                          <i class="bi bi-instagram me-1"></i> Instagram
                      </span>
                  </a>
                data;
        }
        ?>

      </div>
    </div>
  </div>
</div>
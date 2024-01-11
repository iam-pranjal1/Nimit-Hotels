<div class="container-fluid px-lg-4 mt-3">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <?php
      $carousel_r = Select_all('carousel');
      $path = CAROUSEL_IMG_PATH;
      while ($row = mysqli_fetch_assoc($carousel_r)) {
        echo <<<data
                      
                      <div class="swiper-slide ">
                          <img src="$path{$row['picture']}" class="w-100 d-block"/>
                      </div>
                  data;
      }
      ?>

    </div>
  </div>

  <!-- Swiper JS -->
</div>
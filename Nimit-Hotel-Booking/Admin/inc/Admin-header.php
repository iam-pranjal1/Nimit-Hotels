<div class="container-fluid bg-dark text-light p-3 d-flex algin-items-center justify-content-between sticky-top">
    <h3 class="mb-0 h-font">Admin Pannel Dashboard</h3>
    <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>
  </div>

  <div class="col-lg-2 bg-dark border-top border-3 border-secondary " id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-effect ">
      <div class="container-fluid flex-lg-column align-items-stretch">
        <h4 class="mt-2 text-light">Admin Pannel</h4>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-column" id="adminDropdown">
          <ul class="nav nav-pills nav-fill flex-column">
            
            <li class="nav-item">
              <a class="nav-link text-white" href="Admin-Dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="carousel.php">Carousel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="settings.php">Settings</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
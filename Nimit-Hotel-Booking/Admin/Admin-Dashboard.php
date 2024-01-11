<?php
require("./inc/essentials.php");
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Pannel - Dashboard</title>
  <?php require("./inc/links.php"); ?>
  <link rel="stylesheet" href="./CSS/admin-Common.css" />
</head>

<body class="bg-light">
<?php require("./inc/Admin-header.php"); ?>

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4" >
        Admin Dashboard Page
      </div>
    </div>
  </div>
  <?php require("./Scripts/Scripts.php"); ?>
</body>

</html>
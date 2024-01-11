<?php require("./inc/db_config.php");
require("./inc/essentials.php");
session_start();
if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true){
    redirect('./Admin-Dashboard.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Login-Panel</title>
    <?php require("./inc/links.php"); ?>
    <link rel="stylesheet" href="./CSS/admin-Common.css" />
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark py-3 text-white">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" />
                </div>

                <div class="mb-3">
                    <input name="admin_password" required type="password" class="form-control shadow-none text-center" placeholder="Password" />
                </div>
                <button name="admin_login" type="submit" class="btn text-white  custom-bg">Login</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['admin_login'])) {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin_crud` WHERE `admin_name`=? AND `admin_password`=? ";
        $VALUES = [$frm_data['admin_name'], $frm_data['admin_password']];
        $datatypes = "ss";

        $res = select($query, $VALUES, $datatypes);
        print_r($res);

        if ($res->num_rows == 1) {
            alert('success', 'Login Sucessfully');
            $row = mysqli_fetch_assoc($res);

            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('./Admin-Dashboard.php');
            
        } else {
            alert('error', 'Login Failed - Invaild credentials');
        }
    }
    ?>

<?php require("./Scripts/Scripts.php"); ?>
</body>

</html>
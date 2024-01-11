<?php
require("../inc/db_config.php");
require("../inc/essentials.php");
adminLogin();

if (isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];

    try {
        $res = select($q, $values, "i");
        if ($res) {
            $data = mysqli_fetch_assoc($res);
            $json_data = json_encode($data);
            echo $json_data;
        } else {
            // Handle the case where the query did not execute successfully
            echo json_encode(['error' => 'Query failed.']);
        }
    } catch (Exception $e) {
        // Handle other exceptions
        echo json_encode(['error' => $e->getMessage()]);
    }
}



if (isset($_POST['update_general'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_tittle`=?, `site_about`=? WHERE `sr_no`=? ";
    $values = [$frm_data['site_tittle'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}

if (isset($_POST['update_shutdown'])) {
    $frm_data = ($_POST['update_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}


if (isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [1];

    try {
        $res = select($q, $values, "i");
        if ($res) {
            $data = mysqli_fetch_assoc($res);
            $json_data = json_encode($data);
            echo $json_data;
        } else {
            // Handle the case where the query did not execute successfully
            echo json_encode(['error' => 'Query failed.']);
        }
    } catch (Exception $e) {
        // Handle other exceptions
        echo json_encode(['error' => $e->getMessage()]);
    }
}

if (isset($_POST['update_contact'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `contact_details` SET `address`=?, `gmap`=?, `phone1`=?, `phone2`=?, `email`=?, `fb`=?, `tw`=?, `ig`=?, `iframe`=? WHERE `sr_no`=?";

    $values = [
        $frm_data['address'],
        $frm_data['gmap'],
        $frm_data['phone1'],
        $frm_data['phone2'],
        $frm_data['email'],
        $frm_data['fb'],
        $frm_data['tw'],
        $frm_data['ig'],
        $frm_data['iframe'],
        1
    ];
    $res = update($q, $values, 'sssssssssi');
    echo $res;
}


if (isset($_POST['add_member'])) {
    $frm_data = filteration($_POST);
    $img_r = upload_img($_FILES['picture'], ABOUT_FOLDER);
    if ($img_r == "invalid-image-type") {
        echo $img_r;
    } elseif ($img_r == "image-size-is-too-large") {
        echo $img_r;
    } elseif ($img_r == "image-upload-failed") {
        echo $img_r;
    } else {
        $q = "INSERT INTO `team_details`(`name`, `picture`) VALUES (?,?)";
        $values = [$frm_data['name'], $img_r];
        $res = insert($q, $values, 'ss');
        echo $res;
    }
}


if (isset($_POST['get_members'])) {
    $result = Select_all("team_details");


    while ($row = mysqli_fetch_assoc($result)) {
        $path = ABOUT_IMG_PATH;
        echo <<<data
                <div class="col-md-2 mb-3">
                    <div class="card bg-dark text-white">
                        <img src="$path$row[picture]" class="card-img" alt="...">
                        <div class="card-img-overlay text-end">
                            <button type="button" onclick="delete_member($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                                <i class="bi bi-trash3-fill">DELETE</i>
                            </button>
                    
                        </div>
                        <p class="card-text text-center px-3 py-2">$row[name]</p>
                    </div>
                </div>
            data;
    }
}

if (isset($_POST['delete_member'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['delete_member']];

    $pre_q = "SELECT * FROM `team_details` WHERE `sr_no`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);

    if (delete_image($img['picture'], ABOUT_FOLDER)) {
        $q = "DELETE FROM `team_details` WHERE `sr_no`=?";
        $res = delete($q, $values, 'i');
        echo $res;
    } else {
        echo 0;
    }
}
?>
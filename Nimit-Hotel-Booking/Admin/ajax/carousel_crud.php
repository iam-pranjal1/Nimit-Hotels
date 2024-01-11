<?php
require("../inc/db_config.php");
require("../inc/essentials.php");
adminLogin();

if (isset($_POST['add_carousel'])) {
    
    $img_r = upload_img($_FILES['picture'], CAROUSEL_FOLDER);
    if ($img_r == "invalid-image-type") {
        echo $img_r;
    } elseif ($img_r == "image-size-is-too-large") {
        echo $img_r;
    } elseif ($img_r == "image-upload-failed") {
        echo $img_r;
    } else {
        $q = "INSERT INTO `carousel`(`picture`) VALUES (?)";
        $values = [$img_r];
        $res = insert($q, $values, 's');
        echo $res;
    }
}

if (isset($_POST['get_carousel'])) {
    $result = Select_all("carousel");

    while ($row = mysqli_fetch_assoc($result)) {
        $path = CAROUSEL_IMG_PATH;
        echo <<<data
            <div class="col-md-2 mb-3">
                <div class="card bg-dark text-white">
                    <img src="$path$row[picture]" class="card-img" alt="...">
                    <div class="card-img-overlay text-end">
                        <button type="button" onclick="delete_carousel($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                            <i class="bi bi-trash3-fill">DELETE</i>
                        </button>
                    </div>
                </div>
            </div>
        data;
    }
}

if (isset($_POST['delete_carousel'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['delete_carousel']];

    $pre_q = "SELECT * FROM `carousel` WHERE `sr_no`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);

    if (delete_image($img['picture'], CAROUSEL_FOLDER)) {
        $q = "DELETE FROM `carousel` WHERE `sr_no`=?";
        $res = delete($q, $values, 'i');
        echo $res;
    } else {
        echo 0;
    }
}
?>

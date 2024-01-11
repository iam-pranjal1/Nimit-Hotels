<?php

// fronted proccess needs this data
define('SITE_URL', 'http://127.0.0.1/NIMIT-HOTEL-BOOKING/');
define('ABOUT_IMG_PATH', SITE_URL . 'images/about/');
define('CAROUSEL_IMG_PATH', SITE_URL . 'images/carousel/');




// backend proccess needs this data

define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/Nimit-Hotel-Booking/images/');
define('ABOUT_FOLDER', 'about/');
define('CAROUSEL_FOLDER', 'carousel/');

function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        echo "
    <script>
    
    window.location.href='index.php';
    </script>
    ";
    }
    // session_regenerate_id(true);

}
function redirect($url)
{
    echo "
    <script>
    
    window.location.href='$url';
    </script>
    ";
}

function alert($type, $msg)
{

    $bsClass = ($type === "success") ? "alert-success" : "alert-danger";

    echo <<<alert
        <div class="alert $bsClass alert-dismissible fade custom-alert show" role="alert">
            <strong class="me-3">$msg</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    alert;
}


function upload_img($image, $folder)
{
    $valid_mime = [
        'image/jpeg',
        'image/png',
        'image/jpg',
        'image/webp'
    ];

    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mime)) {
        return 'invalid-image-type';
    } elseif (($image['size'] / (1024 * 1024)) > 5) {
        return 'image-size-is-too-large';
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_' . random_int(1111, 9999) . ".$ext";
        $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname;
        } else {
            return "image-upload-failed";
        }
    }
}

function delete_image($image, $folder)
{
    if (unlink(UPLOAD_IMAGE_PATH . $folder . $image)) {
        return true;
    } else {
        return false;
    }
}

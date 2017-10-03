
<?php

include_once  './package/details/phpsbstatus.php';
$phpsbstatuscon = new phpsbstatus();


if (isset($_REQUEST['submitwithimage'])) {
    $name = $_FILES['postimage']['name'];
    $size = $_FILES['postimage']['size'];
    $status = $_REQUEST['status'];
    $userid = $_REQUEST['userid'];

    $file_formats = array("jpg", "png", "gif", "bmp"); // Set File format
    $time = date('dmy') . round(microtime(true) * 1000);
    $target_dir = "images/dbimages/photos/$userid/";
    $filename = $_FILES['postimage']['name'];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $target_file = $target_dir . $userid . $time . '.' . $filetype;


    if (strlen($name)) {
        $extension = substr($name, strrpos($name, '.') + 1);
        if (in_array($extension, $file_formats)) {
            if ($size < (2048 * 2048)) {
                $imagename = md5(uniqid() . time()) . "." . $extension;
                $tmp = $_FILES['postimage']['tmp_name'];
                if (move_uploaded_file($tmp, $target_file)) {
                    $imageid = $phpsbstatuscon->newstatus($userid, $status, "postwithimage", $target_file);
                    //echo '<h3>ehlkas sir</h3>';
                } else {
                    echo "Could not move the file.";
                }
            } else {
                echo "Your image size is bigger than 4MB.";
            }
        } else {
            echo "Invalid file format.";
        }
    } else {
        echo "Please select image..!";
    }
    exit();
}
?>
 
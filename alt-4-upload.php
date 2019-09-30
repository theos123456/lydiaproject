<?php
/* [INIT] */
require "config.php";

/* [ERROR CHECKING] */
if ($_FILES['upFile']['size']==0) { die("No file selected"); }
if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }

// ALTERNATE SOLUTION
// SIMPLY SAVE THE UPLOADED FILE INTO A PRIVATE FOLDER
$target_file = "private_upload/" . basename($_FILES["upFile"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { echo "ok"; }
else{ echo "error"; }
?>
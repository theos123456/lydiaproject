<?php
// ALTERNATE SOLUTION - GET IMAGE FROM PRIVATE FOLDER
// DO YOUR ACCESS PERMISSIONS CHECK - USER SESSION, PERMISSIONS, ETC...
$target_file = "private_upload/" . $_GET['f'];
if (!file_exists($target_file)){ die("File note found"); }
echo file_get_contents($target_file);
?>
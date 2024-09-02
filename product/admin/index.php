<?php
if (is_dir('../install')) {
    header('Location: ../install/');
    exit;
};
require '../include/init.php';
header("location:".BASEURL."backend/");
exit;
?>

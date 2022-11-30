<?php

if (isset($_POST['update-btn'])) {
    $epencegahan = $_POST['pencegahan'];
    $epembetulan = $_POST['pembetulan'];
    $update = "Update pencegahan SET Description='$epencegahan' WHERE Aduan_ID=$id";
}



?>
<?php

    require "libs/functions.php";

    $id = $_GET["id"];

    delete_data_nasil($id);

    $_SESSION['message'] = $id." numaralı kategori silindi.";
    $_SESSION['type'] = "danger";

    header('Location: admin_panel.php');



?>
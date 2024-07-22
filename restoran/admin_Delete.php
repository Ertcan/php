<?php

    require "libs/functions.php";

    $id = $_GET["id"];

    delete_data($id);

    $_SESSION['message'] = $id." numaralı kategori silindi.";
    $_SESSION['type'] = "danger";

    header('Location: admin_panel.php');



?>
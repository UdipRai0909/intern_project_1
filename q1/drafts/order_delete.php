<?php
require_once '../logic/conn.php';

if (!$_GET['ordDelete']) {
    header("Refresh:0; url=../../index.php?error=some_error");
} else {
    // Get ID Values
    $id = $_GET['ordDelete'];

    // Call Delete function
    $result = $crud->deleteOrder($id);

    // Redirect
    if ($result) {
        header("Refresh:0; url=../../index.php?success=deleted_order");
    } else {
        header("Refresh:0; url=../../index.php?error=some_error");
    }
}
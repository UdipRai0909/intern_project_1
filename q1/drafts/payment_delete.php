<?php
require_once '../logic/conn.php';

if (!$_GET['payDelete']) {
    header("Refresh:0; url=../../index.php?error=some_error");
} else {
    // Get ID Values
    $id = $_GET['payDelete'];

    // Call Delete function
    $result = $crud->deletePayment($id);

    // Redirect
    if ($result) {
        header("Refresh:0; url=../../index.php?success=deleted_payment");
    } else {
        header("Refresh:0; url=../../index.php?error=some_error");
    }
}
<?php
require_once '../logic/conn.php';

if (!$_GET["name"]) {
    header("Refresh:0; url=../../index.php?error=some_error");
} else {
    $name = $_GET["name"];

    $price = $_GET["price"];
    $price += 0;

    $time = $_GET["time"];
    $dateTime = date('Y-m-d H:i:s', strtotime($time));

    // call function to insert and track if it was a success or not
    $isSuccess = $crud->insertOrder($name, $price, $dateTime);

    // redirect to respective success/error message pages.php
    if ($isSuccess) {
        header("Refresh:0; url=../../index.php?success=inserted_order");
    } else {
        header("Refresh:0; url=../../index.php?error=some_error");
    }
}
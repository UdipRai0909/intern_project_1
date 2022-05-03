<?php
require_once '../logic/conn.php';

if ($_GET['delete_all'] != "true") {
  header("Refresh:0; url=../../index.php?error=some_error");
} else {

  // Call Truncate function
  $result = $crud->deleteAll();

  // Redirect
  if ($result) {
    header("Refresh:0; url=../../index.php?success=deleted_everything");
  } else {
    header("Refresh:0; url=../../index.php?error=some_error");
  }
}
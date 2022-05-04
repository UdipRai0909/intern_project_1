<?php

if (!isset($_GET['success'])) {
  $success = '';
} else {
  $success = $_GET['success'];
}

if (!isset($_GET['error'])) {
  $error = '';
} else {
  $error = $_GET['error'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <!-- Webpage Icon -->
  <link rel="icon" href="./img/udip_logo.png" type="image/x-icon" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diagonal Restaurant Menu App</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet" />

  <!-- #region CSS -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- Personal / Custom CSS -->
  <link rel="stylesheet" href="./css/checkbox.css" />
  <link rel="stylesheet" href="./css/media_queries.css" />
  <link rel="stylesheet" href="./css/modal1.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <!-- #endregion -->
</head>

<body>
  <!-- Main part -->
  <main>
    <nav class="me-5 pe-5">
      <div class="my_nav_logo">
        <a href="../">
          <img src="./img/udip_logo.png" width="120" height="115" alt="My Nav Logo">
        </a>
      </div>
      <div class="me-4">
        <span class="text-danger d-flex justify-content-center p-1">Try clicking on logo</span>

        <h1 class="main-title gradient-border">
          <span class="text-decoration-none text-white">Diagonal Cafeteria</span>
        </h1>

        <?php if ($success == "inserted_payment") { ?>
        <h4 class="alert alert-success m-0 p-3 w-100 border border-success rounded-0" role="alert">
          Inserted Payment Successfully!
        </h4>

        <?php } elseif ($success == "inserted_order") { ?>
        <h4 class="alert alert-success m-0 p-3 w-100 border border-success rounded-0" role="alert">
          Inserted Order Successfully!
        </h4>

        <?php } elseif ($success == "deleted_everything") { ?>
        <h4 class="alert alert-light m-0 p-3 w-100 border border-dark bg-danger text-white  rounded-0" role="alert">
          Deleted All In Database!
        </h4>

        <?php } elseif ($error == "some_error") { ?>
        <h4 class="alert alert-danger m-0 p-3 w-100 border border-danger bg-danger text-white  rounded-0" role="alert">
          Some error occured!
        </h4>

        <?php  } else { ?>
        <span class="d-none"></span>
        <?php  } ?>

      </div>
    </nav>
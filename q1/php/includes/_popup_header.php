<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <!-- Webpage Icon -->
  <link rel="icon" href="../../img/udip_logo.png" type="image/x-icon" />

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
  <link rel="stylesheet" href="../../css/checkbox.css" />
  <link rel="stylesheet" href="../../css/media_queries.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <!-- #endregion -->
</head>

<style>
.gradient-border {
  padding: 0.2rem rem;
  text-align: center;
}
</style>

<body>
  <!-- Main part -->
  <main>
    <nav class="mt-3 me-5 pe-4">
      <div class="my_nav_logo">
        <a href="javascript:void(0)">
          <img src="../../img/udip_logo.png" width="100" height="95" alt="My Nav Logo">
        </a>
      </div>
      <div>
        <h1 class="main-title gradient-border">
          <a href="javascript:void(0)" class="text-decoration-none text-white"> <?= $_GET["table_name"] ?> History</a>
        </h1>
      </div>
    </nav>
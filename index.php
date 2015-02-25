<head>
        <title>Erick Martinez - Portfolio 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>

<ul class="nav nav-pills">
  ...
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
      Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      ...
    </ul>
  </li>
  ...
</ul>



<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");
?>


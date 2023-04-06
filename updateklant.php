<?php
// include_once 'includes/classes/dbh.php';
include_once 'includes/classes/klant.php';
?>
<!doctype html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./includes/css/style.css">
    <title>Database application | Home</title>
</head>
<body>

<!-- navbar   -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="magazijnMeesterMenu.php">magazijnMeester</a>
        <a class="nav-link" href="leverancierPage.php">Leverancier</a>
        <a class='nav-link active' href='klantpage.php'>klant</a>
      </div>
    </div>
  </div>
</nav>

<!-- logo + bedrijf naam  -->
<div class="logoContainer">
  <img src="./includes/images/Bas-Logo.png" alt="Bas Logo">
  <h3>Boodschappenservice Bas Brengt Boodschappen</h3>
</div>
<h1>update klant 1</h1>
			<form action="updateklant2.php" method="post">
			<label for="klantid">klantid:</label>
			<input type="text" id = "klantid" name="klantidvak">
			<input type="submit">
		</form>
</body>

</html>
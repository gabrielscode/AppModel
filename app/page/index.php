<?php require_once('../../conex/signval.php'); ?>
<!DOCTYPE html>
<html ng-app="cynAtom">
<head>
	<title>Hello World</title>
	<!-- ======== HEADERS ======== -->
	<meta charset="utf-8">
	<meta name="author" content="CynAtom Technolgy">
  <meta name="apple-mobile-web-app-capable" content="yes" />

	<link rel="stylesheet" type="text/css" href="../library/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../library/styles/styles.css">
	<!-- ======== SCRIPTS ======== -->
	<script src="../library/angular/angular.js"></script>
</head>

<!-- ======== BEGIN OF APPLICATION ======== -->
<body ng-controller="cynAtomCtrl">

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">{{app}}</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form action="login.php" method="POST" class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>
user: <?php echo $get['nome']; ?>

</body>

<!-- ========== SCRIPTS ENCORE ========== -->
  <script src="../library/tether/tether.min.js"></script>
  <script src="../library/jquery/jquery-3.2.1.min.js"></script>
	<script src="../library/bootstrap/bootstrap.min.js"></script>
	<script src="../library/modules.js"></script>
</html>

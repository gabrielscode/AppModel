<?php require_once('conex/signval.php'); ?>
<!DOCTYPE html>
	<html>
<head>
	<title>Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="library/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="library/styles/styles.css">
	<link rel="stylesheet" type="text/css" href="library/fontawesome/css/font-awesome.css">
</head>
<body class="appbody">
<!-- ************** BEGIN OF BODY ************** -->

<!-- ******* NAVBAR ******* -->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><strong>{ Batify }</strong></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>

    <div class="dropdown user-area">
	    <div class="form-inline" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      <img src="user\<?php echo $getuser['pathflow']; ?>\profile.jpg" class="nav-profpic rounded float-left" alt="..." />
	      <span><?php echo $getuser['name']; ?> <i class="fa fa-angle-down" Earia-hidden="true"></i></span>
	    </div>
		  <div class="dropdown-menu dropdown-menu-right user-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" href="user-settings.php" target="frameapp">Configurações da Conta</a>
		    <a class="dropdown-item" href="#">Configurações da Empresa</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="#">FAQ e Ajuda</a>
		    <div class="dropdown-divider"></div>
		    <a class="dropdown-item" href="conex/logout.php">Sair</a>
		  </div>
	  </div>


  </div>
</nav>

<!-- ******* SIDEBAR ******* -->
<div class="sidebar">
	<div class="sidebar-header">
		<h4><strong></strong></h4>
	</div>
	<ul class="list-group">
	  <a href="dashboard.php" target="frameapp"><li class="list-group-item active">Dashboard</li></a>
	  <a href="library/owner.js" target="frameapp"><li class="list-group-item">Criar Pasta</li></a>
	  <a href="listing.php?pagina=0" target="frameapp"><li class="list-group-item justify-content-between">Gerenciar Processos<span class="badge badge-default">2.364</span></li></a>
	  <a href="dashboard.php" target="frameapp"><li class="list-group-item">Gerar Documentos</li></a>
	  <a href="dashboard.php" target="frameapp"><li class="list-group-item justify-content-between">Gerir Financeiro<span class="badge badge-info">Novo!</span></li></a>
	</ul>
</div>

<!-- ******* CONTENT ******* -->
<div class="pricontainer"">
<iframe name="frameapp" id="frameapp" src="dashboard.php" class="frameapp"></iframe>
</div>
<!-- ******* FOOTER ******* -->
<div class="appfooter">
Gabriel Alves | CynAtom Technologies - 2017
</div>

<!-- ******** END OF BODY ******** -->
</body>
<script type="text/javascript" src="library/tether/tether.min.js"></script>
<script type="text/javascript" src="library/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="library/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="library/owner.js"></script>
</html>
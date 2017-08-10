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
<body>
<!-- ************** BEGIN OF BODY ************** -->
<div class="row motherpanel">
	<div class="col-md-12">
		<div class="panel">
			<div class="panelheader">
				<h5>Gerenciamento de Pastas</h5><span><?php echo $getcompany['name']; ?></span><hr/>
				<form class="form-group form-inline">
					<select class="form-control form-control-sm" style="margin-right: 6px;" id="exampleSelect1">
			      <option>Data de Criação</option>
			      <option>Data da Audiência</option>
			      <option>Prazo</option>
			      <option>Advogado Responsável</option>
			      <option>Estado</option>
			    </select> 
					<select class="form-control form-control-sm" style="margin-right: 6px;" id="exampleSelect1">
						<option>Todos os Advogados</option>
			      <option>Mormonfre</option>
			      <option>Ademir</option>
			      <option>Morotto</option>
			    </select> 
					<input type="button" value="Aplicar Filtros" class="btn btn-default btn-sm" name="">
				</form>
				
				<table class="table tableproc">
				  <thead class="thead-default">
				    <tr>
				    	<th><input type="checkbox" name="process-select"></th>
				      <th>Processo</th>
				      <th>Nome</th>
				      <th>Cidade/Estado</th>
				      <th>Responsável</th>
				    </tr>
				  </thead>
				  <tbody>
						<?php
						//header("Content-Type: text/html; charset=ISO-8859-1",true);

						$itens_por_pagina = 10;
						$pagina = intval($_GET['pagina']);

						$pg_ini = ceil($itens_por_pagina * $pagina);

						$con = mysqli_connect('localhost', 'root', '', 'stgwebapp');
						$sql  = "SELECT dbindx, process, clientname, local FROM folder WHERE company = {$getcompany['company_id']} LIMIT $pg_ini, $itens_por_pagina";
						$query  = mysqli_query($con, $sql);

						$num_total = mysqli_query($con, "SELECT dbindx, process, clientname, local FROM folder")->num_rows;
						$num_paginas = ceil($num_total/$itens_por_pagina);

						if ($query->num_rows > 0) {
						    // output data of each row
						    while($row = $query->fetch_assoc()) {
						        //echo "id: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
						  echo '<tr>
							    	<td><input type="checkbox" name="process-select"></td>
							      <th scope="row">' . $row["process"]. '</th>
							      <td>' . $row["clientname"]. '</td>
							      <td>' . $row["local"]. '</td>
							      <td>' . $row["dbindx"]. '</td>
							    	</tr>';
						    }
						} else {
						    echo "0 results";
						}
						$con->close();
						?>

				  </tbody>
				</table>

				<nav aria-label="navigation" class="footernavigation">
				  <ul class="pagination pagination-sm">
				    <li class="page-item <?php if($pagina == 0) echo "disabled" ?>"><a class="page-link" href="?pagina=<?php echo $pagina - 1; ?>">Anterior</a></li>
				    	<?php for($i=0;$i<$num_paginas;$i++){
				    		if ($i > 10) {
						    ?>

						    		<li class="page-item disabled"><a class="page-link">...</a></li>
						    		<li class="page-item <?php if($pagina == $num_paginas - 1) echo "active" ?>"><a class="page-link" href="?pagina=<?php echo $num_paginas - 1; ?>"><?php echo $num_paginas - 1; ?></a></li>

						  <?php break; 		
				    	  } ?>
				    	<li onmouseover="window.status='javascript:void(0)';" class="page-item <?php if($pagina == $i) echo 'active' ?>"><a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i + 1; ?></a></li>
				    	<?php } ?>
				    <li class="page-item <?php if($pagina + 1 == $num_paginas) echo 'disabled' ?>"><a class="page-link" href="?pagina=<?php echo $pagina + 1; ?>">Próxima</a></li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- ******** END OF BODY ******** -->
</body>
<script type="text/javascript" src="library/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="library/nicescroll/jquery.nicescroll.min.js"></script>

<script type="text/javascript" src="library/tether/tether.min.js"></script>
<script type="text/javascript" src="library/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="library/owner.js"></script>
</html>
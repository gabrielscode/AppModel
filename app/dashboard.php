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
<div class="row motherpanel" style="margin-bottom:45px;">
	<div class="col-md-6 leftpanel">
		<div class="panel">
			<div class="panelheader">
			<h5>My Tasks</h5><span>By Due</span>
			</div>
			<hr>
				
		</div>
	</div>
	<div class="col-md-6 rightpanel">
		<div class="panel">
			<div class="panelheader">
			<h5>MRR</h5><span>Monthly Recurring Revenue</span>
			</div>
			<hr>
				<canvas id="chartMRR" height="100"></canvas>
		</div>
	</div>
		<div class="col-md-12">
		<div class="panel">
			<div class="panelheader">
			<h5>Investor</h5><span>Pride Network</span>
			</div>
			<hr>
      	<!--canvas id="chart-area" height="200" /-->
    </div>
	</div>
</div>
<!-- ******** END OF BODY ******** -->
</body>
<script type="text/javascript" src="library/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="library/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="library/chartjs/chart.bundle.js"></script>

<script type="text/javascript" src="library/tether/tether.min.js"></script>
<script type="text/javascript" src="library/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="library/owner.js"></script>
<!-- ******** CHARTS SCRIPTS ******** -->
<script type="text/javascript" src="page/charts-values.js"></script>
</html>
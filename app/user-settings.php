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
				<h5>User Settings</h5><span></span>
				<hr>
					<div class="container col-md-6">
						  <form action="actions/user-settings.php" enctype="multipart/form-data" method="post" id="frmUserSettings">
						  	<label class="form-control-label">Name</label>
						    <input class="form-control form-group" type="text" name="name" id="name" placeholder="Name" value="<?php echo $getuser['name']; ?>">
						    <label class="form-control-label">Lastname</label>
						    <input class="form-control form-group" type="text" name="lastname" id="lastname" placeholder="Lastname" value="<?php echo $getuser['lastname']; ?>">
						    <label class="form-control-label">Birth</label>
						    <input class="form-control form-group" type="text" name="birth" id="birth" placeholder="Birth" value="<?php echo $getuser['birth']; ?>">
						    <label class="form-control-label">Title</label>
						    <input class="form-control form-group" type="text" name="title" id="title" placeholder="Title" value="<?php echo $getuser['title']; ?>">
						    <hr>
						    <label class="form-control-label">Profile Pic</label>
						    <input class="form-control-file form-group" type="file" name="file" id="file">
						    <small class="form-text text-muted">Maximum upload file size: 1024 kB</small>
						    <hr>
						  </form>
						  <input class="form-control btn btn-success" form="frmUserSettings" type="submit" Value="Save"></input>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- ******** END OF BODY ******** -->
</body>
<script type="text/javascript" src="library/tether/tether.min.js"></script>
<script type="text/javascript" src="library/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="library/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="library/owner.js"></script>
</html>
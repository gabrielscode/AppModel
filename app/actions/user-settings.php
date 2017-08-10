<?php
require_once('../conex/signval.php');

define('SITE_ROOT', realpath('../user'));

if (isset($_FILES['file'])) {
	$name = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];

	$error = $_FILES['file']['error'];
	if ($error !== UPLOAD_ERR_OK) {
		echo "Erro:", $error;
	} elseif (move_uploaded_file($tmp_name, SITE_ROOT . '/' . $getuser['pathflow'] . '/profile.jpg')) {
		echo "Upload!";
	}
} else{
	echo "Selecione um arquivo.";
}

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$birth = $_POST['birth'];
$title = $_POST['title'];

$con = mysqli_connect('localhost', 'root', '', 'stgwebapp');
$sql  = "UPDATE user SET name='$name' WHERE user_id={$getuser['user_id']}";
$sql  = "UPDATE user SET lastname='$lastname' WHERE user_id={$getuser['user_id']}";
$sql  = "UPDATE user SET birth='$birth' WHERE user_id={$getuser['user_id']}";
$sql  = "UPDATE user SET title='$title' WHERE user_id={$getuser['user_id']}";
$query  = mysqli_query($con, $sql);

?>
<script type="text/javascript">
	window.parent.location.reload(true);
</script>


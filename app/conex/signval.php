<?php
// Incluindo arquivo de conexão/configuração
require_once('conex.php');
// Instanciando novo objeto da classe Login
$objLogin = new Login();
// Verificando se o usuário está logado, caso esteja, será redirecionado para a index
if (!$objLogin->verificar('login'))
    // Finalizado o script, apenas para garantir que o usuário não irá ver o conteúdo da página
    exit;

$con = mysqli_connect('localhost', 'root', '', 'stgwebapp');
$sql  = "SELECT * FROM user WHERE user_id = {$objLogin->getID()}";
$query  = mysqli_query($con, $sql);
$getuser = mysqli_fetch_array($query);

$con = mysqli_connect('localhost', 'root', '', 'stgwebapp');
$sql  = "SELECT * FROM company WHERE company_id = {$getuser['company']}";
$query  = mysqli_query($con, $sql);
$getcompany = mysqli_fetch_array($query);

?>
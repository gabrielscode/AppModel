<?php
// Incluindo arquivo de conexão/configuração
require_once('conex.php');

// Instanciando novo objeto da classe Login
$objLogin = new Login();

// Recuperando informações enviadas
$login = $_POST['login'];
$senha = $_POST['password'];

// Se conseguir encontrar o usuário e a senha estiver correta
if ($objLogin->logar($login, $senha))
    // Retornando falso
    echo false;
else
    // Retornando mensagem de erro
    echo '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> e-mail ou senha inválidos!</div>';
?>

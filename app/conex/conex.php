<?php 

// Inicia Conexão
$con = mysqli_connect('localhost', 'root', '', 'stgwebapp');

function __autoload($class)
{
    require_once("{$class}.class.php");
}
?>

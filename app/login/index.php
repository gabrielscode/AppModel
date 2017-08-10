<?php
// Incluindo arquivo de conexão/configuração
require_once('../conex/conex.php');
// Instanciando novo objeto da classe Login
$objLogin = new Login();
// Verificando se o usuário está logado, caso esteja, será redirecionado para a index
if (!$objLogin->verificarse('../'))
    // Finalizado o script, apenas para garantir que o usuário não irá ver o conteúdo da página
    exit;
?>
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
  <link rel="stylesheet" type="text/css" href="../library/styles/lgstyles.css">
  <!-- ======== SCRIPTS ======== -->
  <script src="../library/angular/angular.js"></script>
  <script src="../library/jquery/jquery-3.2.1.min.js"></script>
  <script src='../library/jquery/jquery.form.js'></script>
  <script type="text/javascript">
    // Quando carregado a página
    $(function($) {

        // Quando enviado o formulário
        $('#frmLogin').submit(function() {

            // Limpando mensagem de erro
            $('div.mensagem-erro').html('');

            // Mostrando loader
            $('div.loader').show();

            // Enviando informações do formulário via AJAX
            $(this).ajaxSubmit(function(resposta) {

                // Se não retornado nenhum erro
                if (!resposta)
                    // Redirecionando para o painel
                    window.location.href = '../';
                else
                {
                    // Encondendo loader
                    $('div.loader').hide();

                    // Exibimos a mensagem de erro
                    $('div.mensagem-erro').html(resposta);
                }

            });

            // Retornando false para que o formulário não envie as informações da forma convencional
            return false;

        });
    });
  </script>
</head>

<!-- ======== BEGIN OF APPLICATION ======== -->
<body ng-controller="cynAtomCtrl">

<div class="jumbotron">
  <h4>Login Panel</h4>
  <hr/>

  <div class="loader" style="display: none;"><img src="../library/images/loading.gif" height="16" width="16" alt="Carregando" /></div>
  <div class="mensagem-erro"></div>

  <form action="../conex/logar.php" method="post" id="frmLogin">
    <input class="form-control form-group" type="text" name="login" id="login" placeholder="Login">
    <input class="form-control form-group" type="password" name="password" id="password" placeholder="Password">
  </form>
  <input class="form-control btn btn-success" form="frmLogin" type="submit" Value="Sign In"></input>
  <p>WebApp Login - CynAtom © 2017</p>
  <p><a href="polices.html">Polices</a> and <a href="terms.html">Terms of Use</a></p>
</div>

</script>
</body>

<!-- ========== SCRIPTS ENCORE ========== -->
  <script src="../library/tether/tether.min.js"></script>
  <script src="../library/bootstrap/bootstrap.min.js"></script>
  <script src="../library/modules.js"></script>
</html>
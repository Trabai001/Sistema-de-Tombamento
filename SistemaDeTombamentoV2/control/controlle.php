<?php 

require_once("../model/usuario.class.php");

  $opc = $_POST['btn'];


    if($opc == "verificar"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $x = new Usuario();
    $x->autenticar($email, $senha);
    }

?>
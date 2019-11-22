<?php
/********************************************************************/
/*  Conecta no banco                                               */
/********************************************************************/
include_once '../include/db.php';
include_once '../include/cadastro.php';

//echo '<pre>';print_r($_POST);exit;
/********************************************************************/
/*  Dados de entrada                                                */
/********************************************************************/
$nome           = (string)$_POST['nome'];
$cpf            = (string)$_POST['cpf'];
$cnh            = (string)$_POST['cnh'];
$email          = (string)$_POST['email'];
$carro          = (int)$_POST['carro'];
$periodo        = (int)$_POST['periodo'];
$senha          = (string)$_POST['senha'];
$tipoUsuario    = 2;

/********************************************************************/
/*  inserir novo instrutor                                        */
/********************************************************************/
$salvaCadastro  = phpLibSalvaInstrutor($nome, $cpf, $cnh, $email, $carro, $periodo, $senha, $tipoUsuario);
if(!$salvaCadastro){
    header("Location: ../cadastro_instrutor.php?result=6&idUsuario=$idUsuario");
exit;  
}

header("Location: ../cadastro_instrutor.php?result=0&idUsuario=$idUsuario");
exit;


?>
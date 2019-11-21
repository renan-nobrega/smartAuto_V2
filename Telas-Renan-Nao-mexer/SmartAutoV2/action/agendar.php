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
$email          = (string)$_POST['email'];
$senha          = (string)$_POST['senha'];
$tipoUsuario    = 1;


/********************************************************************/
/*  inserir novo usuário                                            */
/********************************************************************/
//$salvaCadastro  = phpLibSalvaUsuario($nome, $cpf, $email, $senha, $tipoUsuario);
//if(!$salvaCadastro){
//    echo '<pre>';print_r($salvaCadastro);exit;    
}

header('Location: ../cadastro_aluno.php?testeSucesso=1');
exit;


?>
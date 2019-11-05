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
$carro          = (string)$_POST['carro'];
$carro          = (string)$_POST['carro'];
$senha          = (string)$_POST['senha'];


/********************************************************************/
/*  inserir novo usuário                                            */
/********************************************************************/
$salvaCadastro  = phpLibSalvaInstrutor($nome, $cpf, $cnh, $email, $carro, $senha);
if(!$salvaCadastro){
    echo '<pre>';print_r('Deu Ruim');exit;    
}

header('Location: ../cadastro_aluno.php?testeSucesso=1');
exit;


?>
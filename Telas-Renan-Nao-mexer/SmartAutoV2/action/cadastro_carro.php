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
$placa          = (string)$_POST['placa'];
$marca          = (string)$_POST['marca'];
$modelo         = (string)$_POST['modelo'];



/********************************************************************/
/*  inserir novo usuário                                            */
/********************************************************************/
$salvaCadastro  = phpLibSalvaCarro($placa, $marca, $modelo);
if(!$salvaCadastro){
    echo '<pre>';print_r('Deu Ruim');exit;    
}

header('Location: ../cadastro_aluno.php?testeSucesso=1');
exit;


?>
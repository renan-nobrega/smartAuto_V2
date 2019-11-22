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


//echo '<pre>';print_r($_POST);exit;
/********************************************************************/
/*  inserir novo carro                                           */
/********************************************************************/
$salvaCadastro  = phpLibSalvaCarro($placa, $marca, $modelo);
if(!$salvaCadastro){
  
    header("Location: ../cadastro_carro.php?result=7&idUsuario=$idUsuario");
    exit;
}

header("Location: ../cadastro_carro.php?result=0&idUsuario=$idUsuario");
exit;


?>
<?php
/********************************************************************/
/*  Conecta no banco                                               */
/********************************************************************/
include_once '../include/db.php';
include_once '../include/cadastro.php';
echo '<pre>';print_r($_GET);exit;

/********************************************************************/
/*  Dados de entrada                                                */
/********************************************************************/
$idAula           = (int)$_GET['idAula'];

/********************************************************************/
/*  Alterar status aula                                             */
/********************************************************************/
$salvaReservaAula  = phpLibReservaAula($idAula);
if(!$salvaReservaAula){
    echo '<pre>';print_r($salvaReservaAula);exit;    
}

//header('Location: ../cadastro_aluno.php?testeSucesso=1');
exit;


?>
<?php
/********************************************************************/
/*  Conecta no banco                                               */
/********************************************************************/
include_once '../include/db.php';
include_once '../include/cadastro.php';
//echo '<pre>';print_r($_GET);exit;

/********************************************************************/
/*  Dados de entrada                                                */
/********************************************************************/
$idAula                 = (int)$_GET['idAula'];
$idUsuario              = (int)$_GET['idUsuario'];

/********************************************************************/
/*  Alterar status aula                                             */
/********************************************************************/
$salvaReservaAula  = phpLibReservaAula($idAula, $idUsuario);
if(!$salvaReservaAula){
echo '<pre>';print_r('deu ruim');exit;    
}


header("Location: ../agendar.php?testeSucesso=1&idUsuario=$idUsuario");
exit;


?>
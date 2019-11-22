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
/*  Verifica se aula esta diponível                                 */
/********************************************************************/
$statusAula  = getStatusAula($idAula);
if(!$statusAula){
    header("Location: ../agendar.php?result=0&idUsuario=$idUsuario");
}

if($statusAula == 1){
    /********************************************************************/
    /*  Alterar status aula para resercado                              */
    /********************************************************************/
    $salvaReservaAula  = phpLibReservaAula($idAula, $idUsuario);
    if(!$salvaReservaAula){
        echo '<pre>';print_r('deu ruim');exit;    
    }
}else{
    header("Location: ../agendar.php?result=0&idUsuario=$idUsuario");
}

header("Location: ../agendar.php?result=1&idUsuario=$idUsuario");
exit;


?>
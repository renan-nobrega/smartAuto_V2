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
$marcarAulaDada  = phpLibMarcarAulaNaoDada($idAula, $idUsuario);
if(!$marcarAulaDada){
    header("Location: ../instrutor_aulas.php?result=0&idUsuario=$idUsuario");
}


header("Location: ../instrutor_aulas.php?result=1&idUsuario=$idUsuario");
exit;


?>
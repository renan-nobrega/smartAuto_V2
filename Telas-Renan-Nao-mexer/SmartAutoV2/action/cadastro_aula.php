<?php
/********************************************************************/
/*  Conecta no banco                                               */
/********************************************************************/
include_once '../include/db.php';
include_once '../include/cadastro.php';

/********************************************************************/
/*  Dados de entrada                                                */
/********************************************************************/
$data               = (string)$_POST['data'];
$horario            = (int)$_POST['horario'];
$idInstrutor        = (int)$_POST['instrutor'];
$idCarro            = (int)$_POST['carro'];


/********************************************************************/
/*  Verifica se o instrutor estara disponível nesse dia e horario   */
/********************************************************************/
$comparaAula        = verificaInstrutorLivre($data, $horario, $idInstrutor);
if($comparaAula == 2){
    header("Location: ../cadastro_aula.php?result=6&idUsuario=$idUsuario");
    exit;
}


/********************************************************************/
/*  Verifica se o instrutor estara disponível nesse dia e horario   */
/********************************************************************/
$comparaAulaCarro        = verificaCarroLivre($data, $horario, $idCarro);
if($comparaAulaCarro == 2){
    header("Location: ../cadastro_aula.php?result=7&idUsuario=$idUsuario");
    exit;
}


/********************************************************************/
/*  inserir nova aula                                           */
/********************************************************************/
$salvaAula  = phpLibSalvaAula($data, $horario, $idInstrutor, $idCarro);
if(!$salvaAula){
header("Location: ../cadastro_aula.php?result=5&idUsuario=$idUsuario");
exit;
}


header("Location: ../cadastro_aula.php?result=0&idUsuario=$idUsuario");
exit;

?>
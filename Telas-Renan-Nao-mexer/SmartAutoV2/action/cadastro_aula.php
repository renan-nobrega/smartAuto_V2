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
$data               = (string)$_POST['data'];
$horario            = (int)$_POST['horario'];
$idInstrutor        = (int)$_POST['instrutor'];
$idCarro            = (int)$_POST['carro'];



/********************************************************************/
/*  inserir novo usuário                                            */
/********************************************************************/
$salvaAula  = phpLibSalvaAula($data, $horario, $idInstrutor, $idCarro);
if(!$salvaAula){
    echo '<pre>';print_r("Deu Ruim");exit;    
}

header('Location: ../cadastro_aula.php?testeSucesso=1');
exit;


?>
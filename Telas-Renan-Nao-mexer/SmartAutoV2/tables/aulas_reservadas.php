<?php

/****************************************************************/
/* BIBLIOTECAS                                                  */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/cadastro.php';

$idUsuario                          = (int)$_GET['idUsuario'];
$aulas_reservadas                   = get_all_aulas_reservadas($idUsuario);

/****************************************************************/
/* CONTEUDO                                                     */
/****************************************************************/
$i = 0;
foreach($aulas_reservadas as $aulas){
    $idAula         = $aulas['idAula'];
    $diaAula        = $aulas['dia'];
    $hora           = horarioAula($aulas['idHorario']);
    $instrutor      = getInstrutor($aulas['idInstrutor'])['nome'];
    $idCarro        = getCarro($aulas['idCarro'])['modelo'];
    $acoesStatus    = "<a href='action/agendar.php?idAula=".$idAula."&idUsuario=".$idUsuario."' role='button' class='btn btn-block btn-danger btn-xs' ><i class='fa fa-rebel'></i></a>";


    /****************************************************************/
    /* MONTAGEM DO JSON                                             */
    /****************************************************************/
//    echo '<pre>';print_r($idCarro);exit;
    $r[$i]['instrutor']                         = $instrutor;
    $r[$i]['dia']                               = $diaAula;
    $r[$i]['horario']                           = $hora;
    $r[$i]['carro']                             = $idCarro;
    $r[$i]['btn_reservar']                      = $acoesStatus;

    $i++;
}
/****************************************************************/
//echo '<pre>';print_r($r);exit;
echo json_encode($r);
exit;
?>
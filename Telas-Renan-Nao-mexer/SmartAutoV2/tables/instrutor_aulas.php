<?php

/****************************************************************/
/* BIBLIOTECAS                                                  */
/****************************************************************/
require_once '../include/db.php';
require_once '../include/cadastro.php';

$idUsuario                                    = (int)$_GET['idUsuario'];
$aulas_reservadas_instrutor                   = get_all_aulas_do_instrutor($idUsuario);

/****************************************************************/
/* CONTEUDO                                                     */
/****************************************************************/
$i = 0;
foreach($aulas_reservadas_instrutor as $aulas){
    $idAula             = $aulas['idAula'];
    $idAluno            = getIdAluno($idAula)['idAluno'];
    $aluno              = getAlunoNome($idAluno)['nome'];
//    echo '<pre>';print_r($aluno);exit;
    $diaAula            = $aulas['dia'];
    $hora               = horarioAula($aulas['idHorario']);
    $instrutor          = getInstrutor($aulas['idInstrutor'])['nome'];
    $idCarro            = getCarro($aulas['idCarro'])['modelo'];
    $aulaRealizada      = "<a href='action/aulaOK.php?idAula=".$idAula."&idUsuario=".$idUsuario."' role='button' class='btn btn-block btn-danger btn-xs' ><i class='fa fa-rebel'></i></a>";
    $aulaNaoRealizada   = "<a href='action/aulaNaoOK.php?idAula=".$idAula."&idUsuario=".$idUsuario."' role='button' class='btn btn-block btn-danger btn-xs' ><i class='fa fa-rebel'></i></a>";


    /****************************************************************/
    /* MONTAGEM DO JSON                                             */
    /****************************************************************/
    $r[$i]['aluno']                             = $aluno;
    $r[$i]['dia']                               = $diaAula;
    $r[$i]['horario']                           = $hora;
    $r[$i]['carro']                             = $idCarro;
    $r[$i]['aulaDada']                          = $aulaRealizada;
    $r[$i]['aulaNaoDada']                       = $aulaNaoRealizada;

    $i++;
}
/****************************************************************/
//echo '<pre>';print_r($r);exit;
echo json_encode($r);
exit;
?>
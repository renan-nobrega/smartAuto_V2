<?php

/****************************************************************/
/* BIBLIOTECAS                                                  */
/****************************************************************/
require_once '../include/db.php';

ob_clean();


/****************************************************************/
/* CONTEUDO                                                     */
/****************************************************************/
$array                                          = getAll_usuarios_ativos();
if(!$array) $array                              = array();
$qtdItens                                       = count($array);
/****************************************************************/
for($i=0;    $i<$qtdItens;    $i++) {
    $idUsuario                                  = $array[$i]['idUsuario'];
    $nome                                       = $array[$i]['nome'];
    $email                                      = $array[$i]['email'];
    $senha                                      = $array[$i]['senha'];
    $cpf                                        = $array[$i]['CPF'];
    $codigo_validacao                           = $array[$i]['codigo_validacao'];
    if(!$cpf) $cpf                              = '';
    if(!$codigo_validacao) $codigo_validacao    = '';
    $equipe_array                               = get_usuario_equipe($idUsuario);
    $idEquipe                                   = $equipe_array[0]['idEquipe'];
    $equipe                                     = get_equipe_nome($idEquipe);
    if(!$equipe) $equipe                        = '-';
    $idResponsavel                              = get_usuario_responsavel($idUsuario);
    $responsavel                                = get_usuario_nome($idResponsavel);
    if(!$responsavel) $responsavel              = '-';
    $idCargo                                    = get_usuario_cargo($idUsuario);
    $cargo                                      = get_cargo_nome($idCargo);
    $idPerfil                                   = get_usuario_perfil($idUsuario);
    $dataCriacao                                = $array[$i]['dataCriacao'];
    $dataCriacao                                = html_dataCriacao($dataCriacao);
    $status                                     = $array[$i]['status'];
    $status                                     = html_status($status);
    $login                                      = "<button type='button' class='btn btn-block btn-info btn-xs' data-toggle='modal' data-target='.bs-example-modal-sm$i'><i class='fa fa-key'></i></button>
                                                     <div class='modal fade bs-example-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='ModalLogin'>
                                                           <div class='modal-dialog modal-md'>
                                                               <div class='modal-content'>
                                                                   <div class='modal-header'>
                                                                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span></button>
                                                                       <h4 class='modal-title' id='TituloModal'>".getGlobalsTextosDefault('dados_acesso', 'Dados de acesso')."</h4>
                                                                   </div>
                                                                         <div class='modal-body'><h3> <strong>".getGlobalsTextosDefault('login', 'Login').":</strong> $email </h3></div>
                                                                         <div class='modal-body'><h3> <strong>".getGlobalsTextosDefault('senha', 'Senha').":</strong> $senha </h3></div>
                                                             </div>
                                                           </div>
                                                     </div>";
    $acoes                                      = "<div class='btn-group btn-group-justified'>
                                                      <a href='admin_usuarios_adicionar.php?idUsuario=".$idUsuario."&idPerfil=".$idPerfil."&idMenu=".$idMenu."' role='button' data-toggle='tooltip' data-placement='top' title='' data-original-title='Editar'><i class='fa fa-edit text-brown''></i></a>&nbsp;&nbsp;
                                                      <a href='action/admin_usuario_status.php?idUsuario=".$idUsuario."&idMenu=".$idMenu."' role='button' data-toggle='tooltip' data-placement='top' title='' data-original-title='Alterar Status'><i class='fa fa-exchange text-warning''></i></a>&nbsp;&nbsp;
                                                   </div>";
    $acoesEditar                                = "<a href='admin_usuarios_adicionar.php?idUsuario=".$idUsuario."&idMenu=".$idMenu."' role='button' class='btn btn-block btn-warning btn-xs' ><i class='fa fa-edit '></i></a>";
    $acoesStatus                                = "<a href='action/admin_usuario_status.php?idUsuario=".$idUsuario."&idMenu=".$idMenu."' role='button' class='btn btn-block btn-danger btn-xs' ><i class='fa fa-trash'></i></a>";

    $profile = '<a href="front_profile.php?idUsuario='.$idUsuario.'" class="btn btn-info btn-block btn-xs"><i class="fa fa-eye"></i></a>';
    /****************************************************************/
    /* MONTAGEM DO JSON                                             */
    /****************************************************************/
    $r[$i]['idUsuario']                         = $idUsuario;
    $r[$i]['nome']                              = $nome;
    $r[$i]['cargo']                             = $cargo;
    $r[$i]['equipe']                            = $equipe;
    $r[$i]['email']                             = $email;
    $r[$i]['cpf']                               = $cpf;
    $r[$i]['codigo_validacao']                  = $codigo_validacao;
    $r[$i]['responsavel']                       = $responsavel;
    $r[$i]['login']                             = $login;
    $r[$i]['insercao']                          = $dataCriacao;
    $r[$i]['profile']                           = $profile;
    $r[$i]['status']                            = $status;
    $r[$i]['acoes']                             = $acoes;
    $r[$i]['acoesEditar']                       = $acoesEditar;
    $r[$i]['acoesStatus']                       = $acoesStatus;
}
/****************************************************************/
echo json_encode($r);
exit;
?>
<?php 
include_once '../include/db.php';
include_once '../include/cadastro.php';

$email          = (string)$_POST['email'];
$senha          = (string)$_POST['senha'];
$logaUsuario  = phpLibLogaUsuario($email, $senha);

if(!$logaUsuario){
    header("Location: ../index.php?error=1");
    exit;
}
$idUsuario = $logaUsuario[0]['idUsuario'];
header("Location: ../agendar.php?idUsuario=$idUsuario");
exit;
/********************************************************************/
/*  funcções PHP                                                    */
/********************************************************************/

?>
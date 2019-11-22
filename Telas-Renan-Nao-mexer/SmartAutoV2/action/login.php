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

$idUsuario = $logaUsuario['idAluno'];
//echo '<pre>';print_r($logaUsuario);exit;

header("Location: ../agendar.php?idUsuario=$idUsuario");
exit;



?>
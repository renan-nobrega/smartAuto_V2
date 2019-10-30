<?php 
include_once '../include/db.php';
$nome           = (string)$_POST['name'];
$senha          = (string)$_POST['senha'];
//$logaUsuario  = phpLibLogaUsuario($nome, $senha);
if(!$logaUsuario){
    header("Location: ../login.php?error=1");
    exit;  
}
$idUsuario = $logaUsuario[0]['idUsuario'];
header("Location: ../agendamento.php?idUsuario=$idUsuario");
exit;
/********************************************************************/
/*  funcções PHP                                                    */
/********************************************************************/
function phpLibLogaUsuario($nome, $senha){
    $sql = "SELECT * 
    FROM cadastro 
    WHERE nome = '$nome' AND senha = '$senha';
";
    //        return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;   
}
?>
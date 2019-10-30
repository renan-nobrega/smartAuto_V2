<?php


/********************************************************************/
/*  funcções PHP                                                    */
/********************************************************************/



/********************************************************************/
/*  cadastra um novo aluno                                          */
/********************************************************************/
function phpLibSalvaUsuario($nome, $cpf, $email, $senha){
    $sql = "INSERT INTO cadastro_aluno (nome, cpf, email, senha)
VALUES ('$nome', '$cpf', '$email', '$senha')";
//    return $sql;
$result = mysql_query($sql);
if(!$result) return false;
return mysql_insert_id();    
}




?>
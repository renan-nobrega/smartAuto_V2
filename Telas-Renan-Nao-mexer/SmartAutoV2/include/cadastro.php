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



/********************************************************************/
/*  cadastra um novo carro                                          */
/********************************************************************/
function phpLibSalvaCarro($placa, $marca, $modelo){
    $sql = "INSERT INTO cadastro_carro (placa, marca, modelo)
VALUES ('$placa', '$marca', '$modelo')";
    //    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return mysql_insert_id();    
}

/********************************************************************/
/*  cadastra um novo carro                                          */
/********************************************************************/
function phpLibSalvaInstrutor($nome, $cpf, $cnh, $email, $carro, $senha){
    $sql = "INSERT INTO cadastro_instrutor (nome, cpf, cnh, email, carro, senha)
VALUES ('$nome', '$cpf', '$cnh', '$email', '$carro', '$senha')";
    //    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return mysql_insert_id();    
}

/********************************************************************/
/*  pesquisa se usuário já existe                                   */
/********************************************************************/
function phpLibLogaUsuario($email, $senha){
    $sql = "SELECT * 
    FROM cadastro
    WHERE email = '$email' AND senha = '$senha';
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
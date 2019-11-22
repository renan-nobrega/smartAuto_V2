<?php
/********************************************************************/
/*  funcções PHP                                                    */
/********************************************************************/
/********************************************************************/
/*  cadastra um novo aluno                                          */
/********************************************************************/
function phpLibSalvaUsuario($nome, $cpf, $email, $senha, $tipoUsuario){
    $sql = "INSERT INTO cadastro (nome, cpf, email, senha, tipoUsuario)
VALUES ('$nome', '$cpf', '$email', '$senha', $tipoUsuario)";
    //    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return mysql_insert_id();    
}
/********************************************************************/
/*  cadastra um novo carro                                          */
/********************************************************************/
function phpLibSalvaCarro($placa, $marca, $modelo){
    $sql = "INSERT INTO carros (placa, marca, modelo)
VALUES ('$placa', '$marca', '$modelo')";
    //    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return mysql_insert_id();    
}
/********************************************************************/
/*  cadastra um novo carro                                          */
/********************************************************************/
function phpLibSalvaInstrutor($nome, $cpf, $cnh, $email, $carro, $periodo, $senha, $tipoUsuario){
    $sql = "INSERT INTO cadastro (nome, cpf, cnh, email, idCarro, idPeriodo, senha, tipoUsuario)
VALUES ('$nome', '$cpf', '$cnh', '$email', '$carro', '$periodo', '$senha', '$tipoUsuario')";
    //        return $sql;
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
    return $r[0];   
}
/********************************************************************/
/*  Busca todos os instrutores cadastrados                          */
/********************************************************************/
function get_all_instrutores(){
    $sql = "SELECT * 
    FROM cadastro
    WHERE tipoUsuario = '2' AND status = '1';
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  Busca todos os carros cadastrados                               */
/********************************************************************/
function get_all_carros(){
    $sql = "SELECT * 
    FROM carros
    WHERE status = '1';
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  cadastrar aula                                                  */
/********************************************************************/
function phpLibSalvaAula($data, $horario, $idInstrutor, $idCarro){
    $sql = "INSERT INTO aulaCadastrada (dia, idHorario, idInstrutor, idCarro)
VALUES ('$data', '$horario', '$idInstrutor', '$idCarro')";
    //        return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return mysql_insert_id();    
}
/********************************************************************/
/*  Busca todas as aulas cadastrados                               */
/********************************************************************/
function get_all_aulas_cadastradas(){
    $sql = "SELECT * 
    FROM aulaCadastrada
    WHERE status = '1';
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  Troca o ID da horario pelo horario                              */
/********************************************************************/
function horarioAula($idHorarioAula){
    switch ($idHorarioAula) {
        case 1:
            $r = "08:00";
            break;
        case 2:
            $r = "09:00";
            break;
        case 3:
            $r = "10:00";
            break;
        case 4:
            $r = "11:00";
            break;
        case 5:
            $r = "12:00";
            break;
        case 6:
            $r = "13:00";
            break;
        case 7:
            $r = "14:00";
            break;
        case 8:
            $r = "15:00";
            break;
        case 9:
            $r = "16:00";
            break;
        case 10:
            $r = "17:00";
            break;
        case 11:
            $r = "18:00";
            break;
        case 12:
            $r = "19:00";
            break;            
    }
    return $r;   
}
/********************************************************************/
/*  busca os dados do instrutor apartir do ID                       */
/********************************************************************/
function getInstrutor($idInstrutor){
    $sql = "SELECT * 
    FROM cadastro
    WHERE idAluno = '$idInstrutor' AND status = '1';
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  busca os dados do carro apartir do ID                       */
/********************************************************************/
function getCarro($idCarro){
    $sql = "SELECT * 
    FROM carros
    WHERE idCarro = '$idCarro' AND status = '1';
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  reserva aula                                                    */
/********************************************************************/
function phpLibReservaAula($idAula, $idAluno){
    $sql = "UPDATE aulaCadastrada
    SET status = '2',
        idAluno= '$idAluno'
    WHERE idAula = '$idAula'
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return 1;    
}
/********************************************************************/
/*  busca as aulas reservadas do aluno                              */
/********************************************************************/
function get_all_aulas_reservadas($idUsuario){
    $sql = "SELECT * 
    FROM aulaCadastrada
    WHERE idAluno = '$idUsuario' AND status = '2';
    ";
    //                return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  busca as aulas reservadas do Instrutor                          */
/********************************************************************/
function get_all_aulas_do_instrutor($idUsuario){
    $sql = "SELECT * 
    FROM aulaCadastrada
    WHERE idInstrutor = '$idUsuario' AND status = '2';
    ";
    //                    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  busca o ID do aluno apartir do ID da aula                       */
/********************************************************************/
function getIdAluno($idAula){
    $sql = "SELECT idAluno
    FROM aulaCadastrada
    WHERE idAula = '$idAula' AND status = '2';
    ";
    //            return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  busca o nome do aluno apartir do ID                             */
/********************************************************************/
function getAlunoNome($idAluno){
    $sql = "SELECT nome
    FROM cadastro
    WHERE idAluno = '$idAluno' AND status = '1';
    ";
    //                return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r = $row;
        }
    } else return false;
    return $r;   
}
/********************************************************************/
/*  Marca que a aula foi concluida                                  */
/********************************************************************/
function phpLibMarcarAulaDada($idAula, $idAluno){
    $sql = "UPDATE aulaCadastrada
    SET status = '3'
    WHERE idAula = '$idAula'
    ";
    //                return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return 1;    
}
/********************************************************************/
/*  Marca que a aula foi concluida                                  */
/********************************************************************/
function phpLibMarcarAulaNaoDada($idAula, $idAluno){
    $sql = "UPDATE aulaCadastrada
    SET status = '4'
    WHERE idAula = '$idAula'
    ";
    //                return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    return 1;    
}
/********************************************************************/
/*  busca o nome do aluno apartir do ID                             */
/********************************************************************/
function getStatusAula($idAula){
    $sql = "SELECT status
    FROM aulaCadastrada
    WHERE idAula = '$idAula';
    ";
    //                return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r = $row;
        }
    } else return false;
    return $r['status'];   
}
/********************************************************************/
/*  Verifica se o instrutor esta disponivel                        */
/********************************************************************/
function verificaInstrutorLivre($data, $horario, $idInstrutor){
    $sql = "SELECT * 
    FROM aulaCadastrada
    WHERE dia = '$data' AND idHorario = '$horario' AND idInstrutor = '$idInstrutor';
    ";
    //                    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return 1;
    return 2;   
}
/********************************************************************/
/*  Verifica se o carro esta disponivel                             */
/********************************************************************/
function verificaCarroLivre($data, $horario, $idCarro){
    $sql = "SELECT * 
    FROM aulaCadastrada
    WHERE dia = '$data' AND idHorario = '$horario' AND idCarro = '$idCarro';
    ";
    //                    return $sql;
    $result = mysql_query($sql);
    if(!$result) return false;
    if(mysql_num_rows($result)>0) {
        while($row = mysql_fetch_assoc($result)) {
            $r[] = $row;
        }
    } else return 1;
    return 2;   
}


/********************************************************************/
/*  Mensagens de erro                                               */
/********************************************************************/
function msgErro($result){
    switch ($result) {
        case 1:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Erro !!!</strong>
                </div>";
            break;
        case 2:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Aula já foi reservada</strong>
                </div>";
            break;
        case 3:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Aula já foi reservada</strong>
                </div>"
            break;
        case 4:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Falha ao inserir novo usuario</strong>
                </div>"
            break;
        case 5:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Falha ao inserir nova aula</strong>
                </div>"
            break;
        case 6:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Instrutor não disponível</strong>
                </div>"
            break;
        case 7:
            $r = "<div class='alert alert-danger' role='alert' align='center'>
                    <strong>Carro não disponível</strong>
                </div>"
            break;
        case 8:
            $r = "15:00";
            break;
        case 9:
            $r = "16:00";
            break;
        case 10:
            $r = "17:00";
            break;
        case 11:
            $r = "18:00";
            break;
        case 12:
            $r = "19:00";
            break;            
    }
    return $r;   
}
?>
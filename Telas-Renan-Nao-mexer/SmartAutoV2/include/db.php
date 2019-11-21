<?php 
$db_table   = 'smartAuto_V2';            //default: miniacademia
$db_host    = 'localhost';                //default: localhost
$db_port    = '3306';                           //default: 8888 3306
$db_user    = 'root';
$db_pwd     = 'root';
$conexao = mysql_connect("$db_host:$db_port",$db_user,$db_pwd);
mysql_select_db($db_table,$conexao);
?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_bd_malmedica = "localhost";
$database_bd_malmedica = "malmedica";
$username_bd_malmedica = "root";
$password_bd_malmedica = "";
$bd_malmedica = mysql_pconnect($hostname_bd_malmedica, $username_bd_malmedica, $password_bd_malmedica) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_set_charset('utf8');
?>
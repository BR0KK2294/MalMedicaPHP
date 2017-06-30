<?php require_once('../Connections/bd_malmedica.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_bd_malmedica, $bd_malmedica);
$query_jr_usuarios = "SELECT * FROM usuario";
$jr_usuarios = mysql_query($query_jr_usuarios, $bd_malmedica) or die(mysql_error());
$row_jr_usuarios = mysql_fetch_assoc($jr_usuarios);
$totalRows_jr_usuarios = mysql_num_rows($jr_usuarios);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login_usuario'])) {
  $loginUsername=$_POST['login_usuario'];
  $password=$_POST['pass_usuario'];
  $MM_fldUserAuthorization = "id_perfil";
  $MM_redirectLoginSuccess = "Home.php";
  $MM_redirectLoginFailed = "GUILogin.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_bd_malmedica, $bd_malmedica);
  	
  $LoginRS__query=sprintf("SELECT login_usuario, pass_usuario, id_perfil FROM usuario WHERE login_usuario=%s AND pass_usuario=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $bd_malmedica) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'id_perfil');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PAGINA DE ENLACE</title>
<link rel="stylesheet" type="text/css" href="../Utilitarios/Maqueta.css" />
</head>

<body background="../Imagenes/zaha.jpg">
<?php include 'callHeader.php'; ?>
<div>
 <center>
 <br/> <br/> <br/>
 <form action="<?php echo $loginFormAction; ?>" method="POST" name="form1" id="form1">
     <table align="center">
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">Nombre de usuario:</td>
         <td><input type="text" name="login_usuario" value="" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">Contraseña:</td>
         <td><input type="password" name="pass_usuario" value="" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">&nbsp;</td>
         <td><input type="submit" value="Insertar registro" /></td>
       </tr>
     </table>
     <input type="hidden" name="MM_insert" value="form1" />
   </form>
 
 </center>
</div>
<?php include 'callFooter.php'; ?>
</body>
</html>
<?php
mysql_free_result($jr_usuarios);

//require_once("../Controlador/TLogin.php");
if(isset($_POST["OK"]) && $_POST["OK"]=="Enlace")
{ $login_usuario="";//Limpiar para evitar que usuario ingrese sin id y clave
  $pass_usuario="";
  if(isset($_POST["usuario"]) & $_POST["usuario"]!="" )
   { $usuario=$_POST["usuario"];}
  if(isset($_POST["clave"]) & $_POST["clave"]!="" )
   { $clave=$_POST["clave"];}

  if($usuario!="" && $clave!="")  include("../Controlador/TLogin.php");	

  }



if(isset($_POST["OK1"]) && $_POST["OK1"]=="Salir")
{exit();}


if(isset($_POST["OK2"]) && $_POST["OK2"]=="Registrar")
{  	 header("Location:Vision/GUILogUsuarios.php");
}


?>

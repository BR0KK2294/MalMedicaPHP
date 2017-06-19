<?php

if(isset($_POST["login_usuario"]) & $_POST["login_usuario"]!="" )
{ $login_usuario=$_POST["login_usuario"];}
if(isset($_POST["pass_usuario"]) & $_POST["pass_usuario"]!="" )
{ $pass_usuario=$_POST["pass_usuario"];}
  
  if(isset($_POST["OK"]) && $_POST["OK"]=="Enlace")
  { $val=0;
    $val=evaluarUsuario($login_usuario,$pass_usuario);
    if ($val==1) header("Location:Vision/GUIHome.php");
	else         header("Location:TLogin.php");
  }
  
 
  
  function evaluarUsuario($login_usuario,$pass_usuario)
  { include("Datos/Conexion.php");
    $objConex=new Conexion();
    $objConex->abrirConexion();
    $sql="SELECT * FROM USUARIOS WHERE(LOGIN_USUARIO='".$login_usuario."' && PASS_USUARIO='".$pass_usuario."')";
	$datos=$objConex->generarTransaccion($sql);
    $reg=$reg=mysql_fetch_row($datos);
	if($reg[0]==$login_usuario && $reg[1]==$pass_usuario) return 1;
	else return 0;  
  }
  
 
 
?>

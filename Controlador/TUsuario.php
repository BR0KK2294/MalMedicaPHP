<?php
require_once("../Negocio/Usuarios.php");

if(isset($_POST["id_usuario"]) && $_POST["id_usuario"]!="")
{ $id_usuario=$_POST["id_usuario"];}
if(isset($_POST["login_usuario"]) && $_POST["login_usuario"]!="")
{ $login_usuario=$_POST["login_usuario"];}
if(isset($_POST["pass_usuario"]) && $_POST["pass_usuario"]!="")
{ $pass_usuario=$_POST["pass_usuario"];}
if(isset($_POST["nombre_usuario"]) && $_POST["nombre_usuario"]!="")
{ $nombre_usuario=$_POST["nombre_usuario"];}
if(isset($_POST["apellido_usuario"]) && $_POST["apellido_usuario"]!="")
{ $apellido_usuario=$_POST["apellido_usuario"];}
if(isset($_POST["correo_usuario"]) && $_POST["correo_usuario"]!="")
{ $correo_usuario=$_POST["correo_usuario"];}
if(isset($_POST["edad_usuario"]) && $_POST["edad_usuario"]!="")
{ $edad_usuario=$_POST["edad_usuario"];}
if(isset($_POST["fecha_nacimiento"]) && $_POST["fecha_nacimiento"]!="")
{ $fecha_nacimiento=$_POST["fecha_nacimiento"];}
if(isset($_POST["id_perfil"]) && $_POST["id_perfil"]!="")
{ $id_perfil=$_POST["id_perfil"];}



if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ 
  $objUsuario=new Usuarios();
  $objUsuario->Usuarios($id_usuario,$login_usuario,$pass_usuario,$nombre_usuario,$apellido_usuario,$correo_usuario,$edad_usuario,$fecha_nacimiento,$id_perfil);
  $resul=$objUsuario->ingresarUsuario();
  if($resul!="")  header("Location:../GUIUsuarios.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Equipo perdido...);
			   window.location='../Vision/GUILogUsuarios.php'</script>";}
}

if(isset($_POST["OK3"]) && $_POST["OK3"]=="IngresarInvitado")
{ $id_perfil="002";
  $objUsuario=new Usuario();
  $objUsuario->Usuario($id_usuario,$login_usuario,$pass_usuario,$nombre_usuario,$apellido_usuario,$correo_usuario,$edad_usuario,$fecha_nacimiento,$id_perfil);
  $resul=$objUsuario->ingresarUsuario();
  if($resul!="")  header("Location:../GUILogin.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Equipo perdido...);
			   window.location='../Vision/GUILogUsuarios.php'</script>";}
}

if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objUsuario=new Usuario();
  $objUsuario->Usuarios($id_usuario,$login_usuario,$pass_usuario,$nombre_usuario,$apellido_usuario,$correo_usuario,$edad_usuario,$fecha_nacimiento,$id_perfil);
  $resul=$objUsuario->modificarUsuario();
  if($resul!="")  header("Location:../Vision/GUIUsuarios.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Equipo perdido...);
			   window.location='../Vision/GUIUsuarios.php'</script>";}
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objUsuario=new Usuario();
  $objUsuario->setId_usuario($id_usuario);
  $resul=$objUsuario->eliminarUsuario();
  if($resul!="")  header("Location:../Vision/GUIUsuarios.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Equipo perdido...);
			   window.location='../Vision/GUIUsuarios.php'</script>";}
}

?>
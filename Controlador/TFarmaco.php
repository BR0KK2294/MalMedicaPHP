<?php
require_once("../Negocio/Farmaco.php");

if(isset($_POST["id_farmaco"]) && $_POST["id_farmaco"]!="")
{ $id_farmaco=$_POST["id_farmaco"];}

if(isset($_POST["descripcion_farmaco"]) && $_POST["descripcion_farmaco"]!="")
{ $descripcion_farmaco=$_POST["descripcion_farmaco"];}

if(isset($_POST["precio_farmaco"]) && $_POST["precio_farmaco"]!="")
{ $precio_farmaco=$_POST["precio_farmaco"];}

if(isset($_POST["unidad"]) && $_POST["unidad"]!="")
{ $unidad=$_POST["unidad"];}

if(isset($_POST["id_tipo_farmaco"]) && $_POST["id_tipo_farmaco"]!="")
{ $id_tipo_farmaco=$_POST["id_tipo_farmaco"];}


/*NO ETSA MODIFICADO :C

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
*/
?>
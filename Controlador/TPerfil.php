<?php
require_once("../Negocio/Perfil.php");

if(isset($_POST["id_perfil"]) && $_POST["id_perfil"]!="")
{ $id_perfil=$_POST["id_perfil"];}

if(isset($_POST["descripcion_perfil"]) && $_POST["descripcion_perfil"]!="")
{ $descripcion_perfil=$_POST["descripcion_perfil"];}



if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ 
  $objPerfil=new Perfil();
  $objPerfil->Perfil($id_perfil,$descripcion_perfil);
  $resul=$objPerfil->ingresarPerfil();
  if($resul!="")  header("Location:../Vision/GUIUsuario.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Tipo Perfil perdido...);
			   window.location='../Vision/GUIUsuario.php'</script>";}
}


if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objPerfil = new Perfil();
  $objPerfil -> Perfil($id_perfil,$descripcion_perfil);
  $resul = $objPerfil->modificarPerfil();
  
  if($resul!="")  header("Location:../Vision/GUIUsuario.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Tipo Perfil perdido...);
			   window.location='../Vision/GUIUsuario.php'</script>";}
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objPerfil=new Perfil();
  $objPerfil->setId_perfil($id_perfil);
  $resul=$objPerfil->eliminarPerfil();
  if($resul!="")  header("Location:../Vision/GUIUsuario.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Tipo Perfil perdido...);
			   window.location='../Vision/GUIUsuario.php'</script>";}
}

?>
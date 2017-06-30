<?php
require_once("../Negocio/Receta.php");

if(isset($_POST["id_reseta"]) && $_POST["id_reseta"]!="")
{ $id_reseta=$_POST["id_reseta"];}

if(isset($_POST["fecha_emision"]) && $_POST["fecha_emision"]!="")
{ $fecha_emision=$_POST["fecha_emision"];}

if(isset($_POST["total_receta"]) && $_POST["total_receta"]!="")
{ $total_receta=$_POST["total_receta"];}

if(isset($_POST["estado"]) && $_POST["estado"]!="")
{ $estado=$_POST["estado"];}

if(isset($_POST["id_usuarios"]) && $_POST["id_usuarios"]!="")
{ $id_usuarios=$_POST["id_usuarios"];}




if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ 
  $objReceta=new Receta();
  $objReceta->Receta($id_reseta,$fecha_emision,$total_receta,$estado,$id_usuarios);
  $resul=$objReceta->ingresarReceta();
  if($resul!="")  header("Location:../Vision/GUIIngresoReceta.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Receta perdido...);
			   window.location='../Vision/GUIIngresoReceta.php'</script>";}
}


if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objReceta=new Receta();
  $objReceta->Receta($id_reseta,$fecha_emision,$total_receta,$estado,$id_usuarios);
  $resul=$objReceta->modificarReceta();
  if($resul!="")  header("Location:../Vision/GUIIngresoReceta.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Receta perdido...);
			   window.location='../Vision/GUIIngresoReceta.php'</script>";}
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objReceta=new Receta();
  $objReceta->setId_reseta($id_reseta);
  $resul=$objReceta->eliminarReceta();
  if($resul!="")  header("Location:../Vision/GUIIngresoReceta.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Receta perdido...);
			   window.location='../Vision/GUIIngresoReceta.php'</script>";}
}

?>
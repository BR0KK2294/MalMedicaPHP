<?php
require_once("../Negocio/DetalleReceta.php");

if(isset($_POST["id_farmaco"]) && $_POST["id_farmaco"]!="")
{ $id_farmaco=$_POST["id_farmaco"];}

if(isset($_POST["id_receta"]) && $_POST["id_receta"]!="")
{ $id_receta=$_POST["id_receta"];}

if(isset($_POST["cantidad"]) && $_POST["cantidad"]!="")
{ $cantidad=$_POST["cantidad"];}

if(isset($_POST["subtotal"]) && $_POST["subtotal"]!="")
{ $subtotal=$_POST["subtotal"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ 
  $objDetalleReceta=new DetalleReceta();
  $objDetalleReceta->DetalleReceta($id_farmaco,$id_receta,$cantidad,$subtotal);
  $resul=$objDetalleReceta->IngresarDetalleReceta();
  if($resul!="")  header("Location:../Vision/GUIDetalleReceta.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de DetalleReceta perdido...);
			   window.location='../Vision/GUIDetalleReceta.php'</script>";}
}


if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objDetalleReceta=new DetalleReceta();
  $objDetalleReceta->DetalleReceta($id_farmaco,$id_receta,$cantidad,$subtotal);
  $resul=$objDetalleReceta->modificarDetalleReceta();
  if($resul!="")  header("Location:../Vision/GUIDetalleReceta.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de DetalleReceta perdido...);
			   window.location='../Vision/GUIDetalleReceta.php'</script>";}
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objDetalleReceta=new DetalleReceta();
  $objDetalleReceta->setId_receta($id_receta);
  $resul=$objDetalleReceta->eliminarDetalleReceta();
  if($resul!="")  header("Location:../Vision/GUIDetalleReceta.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de DetalleReceta perdido...);
			   window.location='../Vision/GUIDetalleReceta.php'</script>";}
}

?>
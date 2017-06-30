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




if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ 
  $objFarmaco=new Farmaco();
  $objFarmaco->Farmaco($id_farmaco,$descripcion_farmaco,$precio_farmaco,$unidad,$id_tipo_farmaco);
  $resul=$objFarmaco->ingresarFarmaco();
  if($resul!="")  header("Location:../Vision/GUIFarmaco.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Farmaco perdido...);
			   window.location='../Vision/GUIFarmaco.php'</script>";}
}


if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objFarmaco=new Farmaco();
  $objFarmaco->Farmaco($id_farmaco,$descripcion_farmaco,$precio_farmaco,$unidad,$id_tipo_farmaco);
  $resul=$objFarmaco->modificarFarmaco();
  if($resul!="")  header("Location:../Vision/GUIFarmaco.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Farmaco perdido...);
			   window.location='../Vision/GUIFarmaco.php'</script>";}
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objFarmaco=new Farmaco();
  $objFarmaco->setId_farmaco($id_farmaco);
  $resul=$objFarmaco->eliminarFarmaco();
  if($resul!="")  header("Location:../Vision/GUIFarmaco.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Farmaco perdido...);
			   window.location='../Vision/GUIFarmaco.php'</script>";}
}

?>
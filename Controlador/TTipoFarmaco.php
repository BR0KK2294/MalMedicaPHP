<?php
require_once("../Negocio/TipoFarmaco.php");

if(isset($_POST["id_tipo_farmaco"]) && $_POST["id_tipo_farmaco"]!="")
{ $id_tipo_farmaco=$_POST["id_tipo_farmaco"];}

if(isset($_POST["descripcion_tipo_farmaco"]) && $_POST["descripcion_tipo_farmaco"]!="")
{ $descripcion_tipo_farmaco=$_POST["descripcion_tipo_farmaco"];}


//los numero 3 - 4 - 5 aon loa 	que siguen de Farmaco pienso que iran en el mismo GUI
if(isset($_POST["OK3"]) && $_POST["OK3"]=="Ingresar")
{ 
  $objTipoFarmaco=new Tipofarmaco();
  $objTipoFarmaco->Tipofarmaco($id_tipo_farmaco,$descripcion_tipo_farmaco);
  $resul=$objTipoFarmaco->ingresarTipoFarmaco();
  if($resul!="")  header("Location:../Vision/GUIFarmaco.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Tipo Farmaco perdido...);
			   window.location='../Vision/GUIFarmaco.php'</script>";}
}


if(isset($_POST["OK4"]) && $_POST["OK4"]=="Modificar")
{ $objTipoFarmaco=new Tipofarmaco();
  $objTipoFarmaco->Tipofarmaco($id_tipo_farmaco,$descripcion_tipo_farmaco);
  $resul=$objTipoFarmaco->modificarTipofarmaco();
  if($resul!="")  header("Location:../Vision/GUIFarmaco.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Tipo Farmaco perdido...);
			   window.location='../Vision/GUIFarmaco.php'</script>";}
}
if(isset($_POST["OK5"]) && $_POST["OK5"]=="Eliminar")
{ $objTipoFarmaco=new Tipofarmaco();
  $objTipoFarmaco->setId_tipo_farmaco($id_tipo_farmaco);
  $resul=$objTipoFarmaco->eliminarTipoFarmaco();
  if($resul!="")  header("Location:../Vision/GUIFarmaco.php");
  else {       echo "<script language='javascript'>alert('Error'...Registro de Tipo Farmaco perdido...);
			   window.location='../Vision/GUIFarmaco.php'</script>";}
}

?>
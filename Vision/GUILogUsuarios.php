<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PAGINA DE REGISTRO DE USUARIOS</title>
<link rel="stylesheet" type="text/css" href="../Utilitarios/Maqueta.css">
</head>

<body background="../Imagenes/azul.jpg">
<div id="barra_superior">
  <ul class="navegacion">
  <li><a href="../GUILogin.php">VOLVER</a></li> 
  </ul>
</div>
</body>
</html>
<?php
require_once("../Datos/Conexion.php");
$objConex=new Conexion();
$objConex->abrirConexion();
$sql="SELECT * FROM USUARIOS";
$datos=$objConex->generarTransaccion($sql);

echo "<html><center>";
echo "<form action='../Controlador/TUsuario.php' method='post'>";
echo "<table class='gridtable' type='text/css' href='../Utilitarios/Maqueta.css'>";
echo "<tr><th bgcolor='#6699FF'>IDUSUARIO</th><td bgcolor='#6699FF'><input type=text name=id_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>NICKNAME</th><td bgcolor='#6699FF'><input type=text name=login_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>CLAVE</th><td bgcolor='#6699FF'><input type=text name=pass_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>NOMBRE</th><td bgcolor='#6699FF'><input type=text name=nombre_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>APELLIDO</th><td bgcolor='#6699FF'><input type=text name=apellido_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>CORREO</th><td bgcolor='#6699FF'><input type=text name=correo_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>EDAD</th><td bgcolor='#6699FF'><input type=text name=edad_usuario></td></tr>";
echo "<tr><th bgcolor='#6699FF'>FECHA DE NACIMIENTO</th><td bgcolor='#6699FF'><input type=text name=fecha_nacimiento></td></tr>";
echo "<tr></tr>";
echo "<tr></tr>";






/*
echo "<html><center>";
echo "<form action='../Controlador/TUsuario.php' method='post'>";
echo "<table class='gridtable' type='text/css' href='../Utilitarios/Maqueta.css'>";
echo "<tr><th bgcolor='#6699FF'>ID_USUARIO</th><th bgcolor='#6699FF'>LOGIN_USUARIO</th>
          <th bgcolor='#6699FF'>PASS_USUARIO</th><th bgcolor='#6699FF'>NOMBRE_USUARIO</th>
		  <th bgcolor='#6699FF'>APELLIDO_USUARIO</th><th bgcolor='#6699FF'>CORREO_USUARIO</th>
		  <th bgcolor='#6699FF'>EDAD_USUARIO</th><th bgcolor='#6699FF'>FECHA_NACIMIENTO</th>
		  <th bgcolor='#6699FF'>ID_PERFIL</th>";

while($reg=mysql_fetch_row($datos))	
{ echo "<tr>";
  echo "<td bgcolor='#6699FF'>".$reg[0]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[1]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[2]."</td>";   
  echo "<td bgcolor='#6699FF'>".$reg[3]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[4]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[5]."</td>";
  echo "<td bgcolor='#6699FF'>".$reg[6]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[7]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[8]."</td>";
  echo "</tr>";
}	  
  echo "<tr>";*/

  
  echo "<table><tr>";
  echo "<td><input type=submit name=OK3 value='IngresarInvitado'></td>";  
 /* echo "<td><input type=submit name=OK1 value='Modificar'></td>";   
  echo "<td><input type=submit name=OK2 value='Eliminar'></td>";*/   
  echo "</tr></table>";
echo "</form></center></html>";

?>

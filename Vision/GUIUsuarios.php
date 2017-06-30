<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mantenedor de Usuarios</title>
  </head>
  <body>
      <div class="tabla">
      <?php include '../Negocio/Usuario.php';
      $objUsuario = new Usuario();
      $datos = $objUsuario->listarUsuario();

      echo '<form action="../Controlador/TUsuario.php" method="post">';
      echo '<table><tr><th>ID</th><th>LOGIN</th><th>PASS</th><th>NOMBRE</th><th>APELLIDO</th><th>CORREO</th><th>EDAD</th><th>FECHA_NAC</th><th>ID_PERFIL</th></tr>';
      while ($reg=mysql_fetch_row($datos)) {
        echo '<tr>';
        echo '<td>'.$reg[0].'</td>';
        echo '<td>'.$reg[1].'</td>';
        echo '<td>'.$reg[2].'</td>';
        echo '<td>'.$reg[3].'</td>';
        echo '<td>'.$reg[4].'</td>';
        echo '<td>'.$reg[5].'</td>';
        echo '<td>'.$reg[6].'</td>';
        echo '<td>'.$reg[7].'</td>';
        echo '<td>'.$reg[8].'</td>';
        echo "</tr>";
      }
      echo '<td><input type="text" name="id_usuario"/></td>';
      echo '<td><input type="text" name="login_usuario"/></td>';
      echo '<td><input type="text" name="pass_usuario"/></td>';
      echo '<td><input type="text" name="nombre_usuario"/></td>';
      echo '<td><input type="text" name="apellido_usuario"/></td>';
      echo '<td><input type="text" name="correo_usuario"/></td>';
      echo '<td><input type="text" name="edad_usuario"/></td>';
      echo '<td><input type="text" name="fecha_nacimiento"/></td>';
      echo '<td><input type="text" name="id_perfil"/></td>';
      echo '</table>';
      echo '</form>';
      echo '<div class="botones">';
      echo '  <input type="submit" value="Ingresar" name="OK"/>';
      echo '  <input type="submit" value="Modificar" name="OK1"/>';
      echo '  <input type="submit" value="Eliminar" name="OK2"/>';
      echo '</div>';

      ?>

    </div>
  </body>
</html>

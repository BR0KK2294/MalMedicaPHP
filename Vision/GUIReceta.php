<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mantenedor de Recetas</title>
    </head>
    <body>
      <div class="tabla">
      <?php include '../Negocio/Receta.php';
      $objReceta = new Receta();
      $datos = $objReceta->listarReceta();

      echo '<form action="../Controlador/TReceta.php" method="post">';
      echo '<table><tr><th>ID</th><th>FECHA_EMISION</th><th>TOTAL_RECETA</th><th>ESTADO</th><th>ID_USUARIO</th></tr>';
      while ($reg=mysql_fetch_row($datos)) {
        echo '<tr>';
        echo '<td>'.$reg[0].'</td>';
        echo '<td>'.$reg[1].'</td>';
        echo '<td>'.$reg[2].'</td>';
        echo '<td>'.$reg[3].'</td>';
        echo '<td>'.$reg[4].'</td>';
        echo "</tr>";
      }
      echo '<td><input type="text" name="id_receta"/></td>';
      echo '<td><input type="text" name="fecha_emision"/></td>';
      echo '<td><input type="text" name="total_receta"/></td>';
      echo '<td><input type="text" name="estado"/></td>';
      echo '<td><input type="text" name="id_usuarios"/></td>';
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

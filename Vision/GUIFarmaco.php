<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mantenedor de Farmaco</title>
    </head>
    <body>
        <div class="tabla">
        <?php include '../Negocio/Farmaco.php';
        $objFarmaco = new Farmaco();
        $datos = $objFarmaco->listarFarmaco();

        echo '<form action="../Controlador/TFarmaco.php" method="post">';
        echo '<table><tr><th>ID</th><th>DEESCRIPCION</th><th>PRECIO</th><th>UNIDAD</th><th>TIPO</th></tr>';
        while ($reg=mysql_fetch_row($datos)) {
          echo '<tr>';
          echo '<td>'.$reg[0].'</td>';
          echo '<td>'.$reg[1].'</td>';
          echo '<td>'.$reg[2].'</td>';
          echo '<td>'.$reg[3].'</td>';
          echo '<td>'.$reg[4].'</td>';
          echo "</tr>";
        }
        echo '<td><input type="text" name="id_farmaco"/></td>';
        echo '<td><input type="text" name="descripcion_farmaco"/></td>';
        echo '<td><input type="text" name="precio_farmaco"/></td>';
        echo '<td><input type="text" name="unidad"/></td>';
        echo '<td><input type="text" name="id_tipo_farmaco"/></td>';
        echo '</table>';
        echo '</form>';
        echo '<div class="botones">';
        echo '  <input type="submit" value="Ingresar" name="OK"/>';
        echo '  <input type="submit" value="Modificar" name="OK1"/>';
        echo '  <input type="submit" value="Eliminar" name="OK2"/>';
        echo '</div>';

        ?>

      </div>
      <!--
      <div class="botones">
        <input type="submit" value="Ingresar" name="OK"/>
        <input type="submit" value="Modificar" name="OK1"/>
        <input type="submit" value="Eliminar" name="OK2"/>
      </div>
    -->

</body>
</html>

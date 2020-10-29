<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
include '../model/conexion.php';
session_start();
echo "<h2>Bienvenido {$_SESSION['admin']}</h2>";
echo "<a href='logoutController.php' style='text-align:right'>LOGOUT</a>";
echo "<br>";

      if (isset($_POST['filtro'])){
        $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidoPat'];
        $query="SELECT * FROM tbl_alumnos WHERE nombre_alu LIKE '%".$nombre."%' AND apellido_pat LIKE '%".$apellidop."%' ";
      }else {
        $query="SELECT * FROM tbl_alumnos";
      }
    
    echo "<a href='MediasNotas.php'>VER NOTAS</a>";
    echo '<br>';
    echo "<a href='insertar_form.php'>CREAR ALUMNO</a>";
    echo '<br>';
?>
<form method="POST">
    <h1>Filtrar</h1>
    <p>Nombre:<input type="text" name="nombre" size="40"></p>
    <p>Apellido Paterno:<input type="text" name="apellidoPat" size="40"></p>
    <input type="hidden" name="id" size="40">
    <p>
      <input type="submit" value="Filtrar" name="filtro">
      <input type="reset" value="Borrar">
    </p>
  </form>
<?php
    //$query="SELECT * FROM tbl_alumnos;";
    $sentencia=$pdo->prepare($query);
    $sentencia->execute();
    $id_persona=-1;
    $lista_persona=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_persona);
    ?>
            <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">ApellidoPatria</th>
            <th scope="col">ApellidoMat</th>
          </tr>
        </thead>
        <tbody>

    <?php
    foreach($lista_persona as $persona) {
        $id=$persona['id_alumno'];
        ?>
          <tr>
            <td><?php echo "{$persona['nombre_alu']}";?></td>
            <td><?php echo "{$persona['apellido_pat']}"; ?></td>
            <td><?php echo "{$persona['apellido_mat']} "; ?></td>
            <td><?php echo "<a href='modificar_alumno.php?id_alumno=$id'>Actualizar</a>    "; ?></td>
            <td><?php echo "<a href='eliminar_alumno.php?id_alumno=$id'>Eliminar</a>"; ?></td>
        </tr>

        <?php
        //echo '<br>';
    }    
?>
        </tbody>
        </table>
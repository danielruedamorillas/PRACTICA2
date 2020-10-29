<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
    include '../model/conexion.php';
    $id=$_GET['id_alumno'];
    //echo $id;
    //echo '<br>';
    $query="SELECT * FROM tbl_alumnos WHERE $id=id_alumno;";
    $sentencia=$pdo->prepare($query);
    $sentencia->execute();
    $id_persona=-1;
    $lista_persona=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_persona);
    
    foreach($lista_persona as $persona) {
        $id=$persona['id_alumno'];
        echo "{$persona['nombre_alu']} , ";
        echo "{$persona['apellido_pat']} ";
        echo "{$persona['apellido_mat']} ";
        echo "   ";
    }
    
?>
<form action="update.php" method="POST">
    <h1>Introduce la nota</h1>
    <p>Introduzca la nota de Mates: <input type="text" name="notaMates" size="40"></p>
    <p>Introduzca la nota de Programacion: <input type="text" name="notaProgramacion" size="40"></p>
    <p>Introduzca la nota de Fisica: <input type="text" name="notaFisica" size="40"></p>
    <input type="hidden" name="id" size="40" value="<?php echo $id;?>">
    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

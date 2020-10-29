<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

include '../model/conexion.php';
$id=$_GET['id_alumno'];
//echo $id;

$queryNotas="DELETE FROM tbl_notas WHERE id_alumno=?";
$query="DELETE FROM tbl_alumnos WHERE id_alumno=?";

$sentencia1=$pdo->prepare($queryNotas);
$sentencia1->bindParam(1,$id);
$sentencia1->execute();

$sentencia=$pdo->prepare($query);
$sentencia->bindParam(1,$id);
$sentencia->execute();

header('Location: mostrar_persona.php');

?>
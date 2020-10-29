<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
session_start();
include '../Model/conexion.php';
$id=$_POST['id'];
if (isset($_POST['notaMates'])) {
    $notaM=$_POST['notaMates'];
    $query='UPDATE tbl_notas SET nota=? WHERE nombre_asignatura="Mates" AND id_alumno=?';
    $sentencia=$pdo->prepare($query);
    //$sentencia->bindParam(1,$id_nota);
    $sentencia->bindParam(1,$notaM);
    $sentencia->bindParam(2,$id);
    $sentencia->execute();
}
if (isset($_POST['notaProgramacion'])) {
    $notaP=$_POST['notaProgramacion'];
    $query='UPDATE tbl_notas SET nota=? WHERE nombre_asignatura="Programacion" AND id_alumno=?';
    $sentencia=$pdo->prepare($query);
    //$sentencia->bindParam(1,$id_nota);
    $sentencia->bindParam(1,$notaP);
    $sentencia->bindParam(2,$id);
    $sentencia->execute();
}
if (isset($_POST['notaFisica'])) {
    $notaF=$_POST['notaFisica'];
    $query='UPDATE tbl_notas SET nota=? WHERE nombre_asignatura="Fisica" AND id_alumno=?';
    $sentencia=$pdo->prepare($query);
    //$sentencia->bindParam(1,$id_nota);
    $sentencia->bindParam(1,$notaF);
    $sentencia->bindParam(2,$id);
    $sentencia->execute();
}

header('Location: mostrar_persona.php');


?>


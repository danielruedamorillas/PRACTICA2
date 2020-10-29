<?php
session_start();
include '../Model/conexion.php';

$query="SELECT ROUND(AVG(nota)) AS 'Media' FROM tbl_notas WHERE nombre_asignatura='Mates'";
$result=mysqli_query($conexion,$query);
$MediaMates= $result->fetch_array()[0] ?? '';
echo "La media de Mates es de $MediaMates";
echo "<br>";

$query2="SELECT ROUND(AVG(nota)) AS 'Media' FROM tbl_notas WHERE nombre_asignatura='Fisica'";
$result2=mysqli_query($conexion,$query2);
$MediaFisica= $result2->fetch_array()[0] ?? '';
echo "La media de Fisica es de $MediaFisica";
echo "<br>";

$query3="SELECT ROUND(AVG(nota)) AS 'Media' FROM tbl_notas WHERE nombre_asignatura='Programacion'";
$result3=mysqli_query($conexion,$query3);
$MediaProgramacion= $result3->fetch_array()[0] ?? '';
echo "La media de Programacion es de $MediaProgramacion";
echo "<br>";


$query4="SELECT Max(nota), nombre_asignatura FROM tbl_notas INNER JOIN tbl_alumnos ON tbl_notas.id_alumno=tbl_alumnos.id_alumno";
$result4=mysqli_query($conexion,$query4);
$alumnoMates= $result4->fetch_array()[0] ?? '';
$asignaturaMates= $result4->fetch_array()[1] ?? '';

echo "El alumno con mas nota es $alumnoMates en la asignatura $asignaturaMates";
echo "<br>";



echo "<br>";
echo "<a href='mostrar_persona.php'>VOLVER</a>";

?>
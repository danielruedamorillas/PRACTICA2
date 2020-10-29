<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
include '../model/conexion.php';
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$grupo=$_POST['grupo'];
$email=$_POST['email'];
$pass=$_POST['psswd'];
//echo $nombre;

$query='INSERT INTO tbl_alumnos (nombre_alu, apellido_pat, apellido_mat, grupo_alu, email_alu, pass_alu) VALUES(?,?,?,?,?,?)';

$sentencia=$pdo->prepare($query);
$sentencia->bindParam(1,$nombre);
$sentencia->bindParam(2,$apellidop);
$sentencia->bindParam(3,$apellidom);
$sentencia->bindParam(4,$grupo);
$sentencia->bindParam(5,$email);
$sentencia->bindParam(6,$pass);
$sentencia->execute();

//echo "todo bien";
header('Location: mostrar_persona.php');

?>
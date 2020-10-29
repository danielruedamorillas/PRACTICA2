<?php
include 'model/conexion.php';
include 'model/administrador.php';
$email=$_POST['email'];
$pass=$_POST['psswd'];
echo 'CONEXION ESTABLECIDA!!!';
echo '<br>';
echo "El email es {$email} <br>";
echo "La contraseña es {$pass}";
//Crea el objeto a traves de la clase
$user=new Administrador($email, $pass);
echo $user->getEmail();
echo $user->getPass();

$sql="SELECT * FROM tbl_administrador WHERE email_admin=? AND pass_admin=?";
$smt=$pdo->prepare ($sql);
$smt->bindParam (1,$email);
$smt->bindParam (2,$pass);
$smt->execute();
$numpersons=$smt->rowCount();
if($numpersons==1){
    session_start();
    $_SESSION['admin']=$email;
    header("location:controller/mostrar_persona.php");
}
else{
    header("location:index.html");
}


?>
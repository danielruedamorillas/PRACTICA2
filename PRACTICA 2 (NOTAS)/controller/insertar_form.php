<link rel="stylesheet" type="text/css" href="../css/style.css">
<form action="crear_alumno.php" method="POST">
    <h1>Insertar Alumno</h1>
    <p>Introduzca el nombre: <input type="text" name="nombre" size="40"></p>
    <p>Introduzca el apellido paterno: <input type="text" name="apellidop" size="40"></p>
    <p>Introduzca el apellido materno: <input type="text" name="apellidom" size="40"></p>
    <p>Introduzca el grupo: <input type="text" name="grupo" size="40"></p>
    <p>Introduzca el email: <input type="email" name="email" size="40"></p>
    <p>Introduzca el password: <input type="password" name="psswd" size="40"></p>
    <input type="hidden" name="id" size="40">
    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>
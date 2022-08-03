<?php
error_reporting(0);
include 'bd.php';
if (isset($_POST['ingresar'])) {
$us=$_POST['usu'];
$pass=$_POST['pas'];
if ($us=="LCP" && $pass=="123") {
  $usok="LCP";
  $passok="123";
}
if (isset($us) && isset($pass)) {
  if ($us==$usok && $pass==$passok) {
    $_SESSION['iniciosi'] = TRUE;
    $_SESSION['Usuario'] = $us;
    header("location:bienvenido.php");
  }
  else{ 
    echo '<script lenguage="javascript">';
    echo 'alert("¡Intentalo de nuevo)!")
    </script>';
  }
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="diseño.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
</head>
<body>
    <header class="head"><img class="ihead" src="imagenes/Logo.png"></header>
    <header class="head2"></head>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<div class="cont">
    <table align="center">
    <tr>
        <td>
            <img src="imagenes/usuario.png" width="40px"><br>
            <img src="imagenes/contraseña.png" width="38px">
        </td>
        <td>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label>Usuario</label><br>
            <input type="text" name="usu"><br>
            <label>Contraseña</label><br>
            <input type="password" name="pas"><br>
            <center><div><input type="submit" value="Ingresar" name="ingresar"></div></center>
            </form>
        </td>
    </tr>
    </table>
</div>
<center>

</body>
</html>
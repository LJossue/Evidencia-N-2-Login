<?php
$usuario = "Leandro";
$contraseña = "123";

if ($_POST['usuario'] == $usuario && $_POST['contraseña'] == $contraseña) {
    header("Location: ../Ejercicio1/index.php");
} else {
    echo "<h1>Usuario o contraseña incorrectos</h1>";
}
?>

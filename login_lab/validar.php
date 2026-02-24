<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if($usuario == "admin" && $password == "1234"){
    echo "<h3 style='color:green'>Bienvenido $usuario</h3>";
}else{
    echo "<h3 style='color:red'>Usuario o contraseña incorrectos</h3>";
}

?>
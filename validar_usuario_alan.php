<?php session_start();
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (60 * 60) ;
include 'iniciar_sesion_alan.php';
$correo=$_REQUEST['correo'];
$contraseña=$_REQUEST['contraseña'];
if(!isset($correo) && !isset($contraseña)){
    header("Location: index.html");  
   }

$obj= new Iniciar();
$_SESSION['nombre'] = $obj->obtener_nombre($correo,$contraseña);
$_SESSION['id_usuario'] = $obj->obtener_id($correo,$contraseña);

$obj->validarUsuario($correo,$contraseña);




?>
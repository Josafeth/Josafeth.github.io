<?php
//header('Content-Type: application/json; charset=utf8');

include 'entradas_alan.php';

$obj = new Entradas();
echo json_encode($obj->mostrar_todo());

?>
<?php 
session_start();
$id_producto=$_REQUEST['id_producto'];
$cantidad=$_REQUEST['cantidad'];
$precio_producto=$_REQUEST['precio_producto'];

$id_usuario=$_REQUEST['id_usuario'];

$cnx=mysqli_connect("localhost","root","","alienexpres");





$aumentar="UPDATE carrito SET cantidad='$cantidad' WHERE id_producto='$id_producto' AND id_usuario='$id_usuario'";
$sql_aumentar=mysqli_query($cnx,$aumentar)or die("ERROR AL ACTUALIZAR CANTIDAD");

$total=$cantidad*$precio_producto;
$aumentar_total="UPDATE carrito SET total='$total' WHERE id_producto='$id_producto' AND id_usuario='$id_usuario'";
$sql_aumentar_aumetar=mysqli_query($cnx,$aumentar_total)or die("ERROR AL ACTUALIZAR TOTAL");


echo'<script type="text/javascript">
    alert("CARRITO ACTUALIZADO");
    window.location.href="carrito.php";
    </script>';



?>
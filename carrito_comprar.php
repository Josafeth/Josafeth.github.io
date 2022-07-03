<?php
session_start();
$id_usuario=$_REQUEST['id_usuario'];


$cnx=mysqli_connect("localhost","root","","alienexpres");

$recuperar_datos="SELECT * from carrito WHERE id_usuario='$id_usuario'";
$sql_recuperar=mysqli_query($cnx,$recuperar_datos)or die("ERROR AL RECUPERAR CARRITO");

while($arre_recuperados=mysqli_fetch_array($sql_recuperar)){

    $id_producto=$arre_recuperados['id_producto'];
    $nombre_producto=$arre_recuperados['nombre_producto'];
    $precio_producto=$arre_recuperados['precio_producto'];
    $cantidad=$arre_recuperados['cantidad'];
    $total=$arre_recuperados['total'];
    $fecha_hora_compra=date('Y-m-d ', time());
    $estatus_garantia='pendiente';
    
    $insertar_recuperados="INSERT INTO pedidos (id_cliente,id_producto ,total,	fecha_hora_compra,cantidad,estatus_garantia) VALUES ('$id_usuario','$id_producto','$total','$fecha_hora_compra','$cantidad','$estatus_garantia')";
    $sql_insert=mysqli_query($cnx,$insertar_recuperados)or die ("ERROR AL INSERTAR COMPRAS");

    $delete_carrito="DELETE from carrito WHERE id_usuario='$id_usuario'";
    $sql_delete_carrito=mysqli_query($cnx,$delete_carrito)or die("ERROR AL ELIMINAR CARRITO");


    echo'<script type="text/javascript">
    alert("CARRITO COMPRADO");
    window.location.href="recibo.php";
    </script>';



}




?>
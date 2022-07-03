<?php

$id_devolucion=$_REQUEST['id_devolucion'];
$id_garantia=$_REQUEST['id_garantia'];
$descripcion=$_REQUEST['descripcion'];

$cnx=mysqli_connect("localhost","root","","alienexpres");

$select_id_producto="SELECT codigo_producto FROM garantias WHERE codigo_garantia='$id_garantia'";
$sql01=mysqli_query($cnx,$select_id_producto);
$convertirArray=mysqli_fetch_array($sql01);
$id_producto=$convertirArray['codigo_producto'];

$DateAndTime = date('Y-m-d h:i:s', time());  


$sql3="INSERT INTO productos_defectuosos(id_producto,id_devolucion,descripcion,hora_entrega) VALUES ('$id_producto','$id_devolucion','$descripcion','$DateAndTime')";
$rta3=mysqli_query($cnx,$sql3) or die("ERROR AL INSERTAR");

$update="UPDATE devoluciones SET estatus='Aceptada' WHERE id_devolucion='$id_devolucion' ";
$udt=mysqli_query($cnx,$update) or die("ERROR AL ACTUALIZAR");


echo'<script type="text/javascript">
    alert("SOLICITUD ACEPTADA");
    window.location.href="solicitudes_menores_30.php";
    </script>';


?>




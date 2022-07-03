<?php

$id_devolucion=$_REQUEST['id_devolucion'];
$id_garantia=$_REQUEST['id_garantia'];
$descripcion=$_REQUEST['descripcion'];

$cnx=mysqli_connect("localhost","root","","alienexpres");

$sql01= mysqli_query($cnx, "select * from devoluciones where id_devolucion=$id_devolucion");

$convertirArray=mysqli_fetch_array($sql01);
$id_dev=$convertirArray['id_devolucion'];


$update="UPDATE devoluciones SET estatus='Rechazada' WHERE id_devolucion='$id_dev' ";
$udt=mysqli_query($cnx,$update) or die("ERROR AL ACTUALIZAR");


echo'<script type="text/javascript">
    alert("SOLICITUD RECHAZADA");
    window.location.href="solicitudes_menores_30.php";
    </script>';


?>




<?php 
session_start();
$id_producto=$_REQUEST['id_producto'];
$nombre_producto=$_REQUEST['nombre_producto'];
$precio_producto=$_REQUEST['precio_producto'];


$id_usuario=$_SESSION['id_usuario'];
$cantidad=1;


/*echo $id_producto;
echo '<br>';
echo $nombre_producto;
echo '<br>';
echo $precio_producto;
echo '<br>';
*/
 

$cnx=mysqli_connect("localhost","root","","alienexpres");

$select_coincidencias="SELECT * FROM carrito WHERE id_producto='$id_producto' AND id_usuario='$id_usuario'";
$sql=mysqli_query($cnx,$select_coincidencias);

if($arre=mysqli_fetch_all($sql)){
    $cantidad++;
    $aumentar="UPDATE carrito SET cantidad='$cantidad' WHERE id_producto='$id_producto' AND id_usuario='$id_usuario'";
    $sql_aumentar=mysqli_query($cnx,$aumentar)or die("ERROR AL ACTUALIZAR CANTIDAD");

    $total=$cantidad*$precio_producto;
    $aumentar_total="UPDATE carrito SET total='$total' WHERE id_producto='$id_producto' AND id_usuario='$id_usuario'";
    $sql_aumentar_aumetar=mysqli_query($cnx,$aumentar_total)or die("ERROR AL ACTUALIZAR TOTAL");
    //echo "EXITO";

    
    

}else{
    $total=$cantidad*$precio_producto;
    echo $total;
    echo '<br>';
    $insert_nuevos="INSERT INTO carrito (id_usuario, id_producto,nombre_producto,precio_producto,cantidad,total ) VALUES ('$id_usuario','$id_producto','$nombre_producto','$precio_producto','$cantidad','$total') ";
    $sql_insert_new=mysqli_query($cnx,$insert_nuevos)or die("ERROR AL INSERTAR NUEVOS");
    //echo "EXITO";
}


echo'<script type="text/javascript">
    alert("CARRITO ACTUALIZADO");
    window.location.href="interfazUsuario.php";
    </script>';


?>
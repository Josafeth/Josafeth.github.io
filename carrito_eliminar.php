<?php  
session_start();
$id_producto=$_REQUEST['id_producto'];
$id_usuario=$_REQUEST['id_usuario'];

$cnx=mysqli_connect("localhost","root","","alienexpres");

$sql="DELETE  FROM  carrito  WHERE id_producto='$id_producto' AND id_usuario='$id_usuario'";
$rta= mysqli_query($cnx,$sql);
if(!$rta){
    echo "ERROR AL ELIMINAR";
}
else{
    
echo'<script type="text/javascript">
alert("PRODUCTO ELIMINADO");
window.location.href="carrito.php";
</script>';
}


?>
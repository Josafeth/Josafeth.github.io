<?php session_start();


if(!$_SESSION){
  echo '<script language="javascript">alert("Debes iniciar sesión");
  window.location="index.html";</script>';
  //header("Location: index.html");  
 } 
 function cerrar(){
  session_destroy();
  //header("Location: index.html");  
 }
    $id_pedido=$_REQUEST['id_pedido'];
    $id_cliente=$_REQUEST['id_cliente'];
    $id_producto=$_REQUEST['id_producto'];
    $fecha_hora_compra=$_REQUEST['fecha_hora_compra'];

    $_SESSION['id_producto'] = $id_producto;

    echo $id_pedido;
    echo '<br>';
    echo $fecha_hora_compra;
    echo '<br>';

    $fecha_vencimeinto=date("Y-m-d",strtotime($fecha_hora_compra."+ 1 month"));
    echo $fecha_vencimeinto;
    $descripcion="NADA QUE AGREGAR";

    $cnx=mysqli_connect("localhost","root","","alienexpres");
    

    $ins1="INSERT INTO garantias (fecha_compra,fecha_vencimiento,descripcion,codigo_producto) VALUES ('$fecha_hora_compra','$fecha_vencimeinto',' $descripcion','$id_producto')";
   $ins2=mysqli_query($cnx,$ins1) or die("ERROR AL INSERTAR");


   $actualizar_estatus="UPDATE pedidos SET estatus_garantia='generada' WHERE id_pedido='$id_pedido'";
   $sql_actualizar=mysqli_query($cnx,$actualizar_estatus)or die("ERROR AL ACTUALIZAR ESTATUS");
    
   echo'<script type="text/javascript">
    alert("GARANTIA GENERADA");
    window.location.href="garantiaGenerada.php";
    </script>';
    
   

    

?>
<?php
    include 'entradas_alan.php';

  
    if( !$_FILES['foto']['tmp_name'] == ""){
        
        
        $check = @getimagesize($_FILES['foto']['tmp_name']);
        if($check !== false){
          $carpeta_destino = 'imagenes/';
          $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
          @move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
          $codigo_producto = $_POST['nombre'];
          $imagen = $carpeta_destino . $_FILES['foto']['name']; 
          $descripcion = $_POST['descripcion'];
          $fecha_compra = $_POST['fecha_compra'];
          $fecha_ingreso = $_POST['fecha_ingreso'];
          $costo_compra = $_POST['costo_compra'];
          $precio_venta = $_POST['precio_venta'];
          $proovedor = $_POST['proovedor'];
          $codigo_garantia = $_POST['codigo_garantia'];
          $id_entrada = $_POST['id_entrada'];
          $obj = new Entradas();
          $obj->guardarcambiosCompleto($id_entrada, $codigo_producto, $imagen, $descripcion, $fecha_compra, 
          $fecha_ingreso, $costo_compra, $precio_venta, $proovedor, $codigo_garantia);
          $obj->Desconectar();
        }
       } else{
        
        $codigo_producto = $_POST['nombre'];
        
        $descripcion = $_POST['descripcion'];
        $fecha_compra = $_POST['fecha_compra'];
        $fecha_ingreso = $_POST['fecha_ingreso'];
        $costo_compra = $_POST['costo_compra'];
        $precio_venta = $_POST['precio_venta'];
        $proovedor = $_POST['proovedor'];
        $codigo_garantia = $_POST['codigo_garantia'];
        $id_entrada = $_POST['id_entrada'];
        $obj = new Entradas();
        $obj->guardarcambiosSinFoto($id_entrada, $codigo_producto, $descripcion, $fecha_compra, 
        $fecha_ingreso, $costo_compra, $precio_venta, $proovedor, $codigo_garantia);
        $obj->Desconectar();
       }

       
       
       
  
    echo '<script language="javascript">  window.location="registroEntradas.php";</script>';
?>
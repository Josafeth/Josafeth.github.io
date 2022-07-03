<?php
class Salidas{
private $ids;
private $codigo_unico;
private $descripcion;
private $fecha_venta;
private $fecha_salida;
private $precio_venta;
private $nombre_cliente;
private $direccion_cliente;
private $proovedor;
private $codigo_garantia;


public function inicializar($codigo_unico,$descripcion,$fecha_venta,$fecha_salida,$precio_venta,$nombre_cliente,$direccion_cliente,$proovedor,$codigo_garantia){
  
    $this->codigo_unico=$codigo_unico;
    $this->descripcion=$descripcion;
    $this->fecha_venta=$fecha_venta;
    $this->fecha_salida=$fecha_salida;
    $this->precio_venta=$precio_venta;
    $this->nombre_cliente=$nombre_cliente;
    $this->direccion_cliente=$direccion_cliente;
    $this->proovedor=$proovedor;
    $this->codigo_garantia=$codigo_garantia;
}
public function inicializar2($ids){
  $this->ids=$ids;
}
public function cone (){
    $con=mysqli_connect("localhost","root","","alienexpres") or 
        die("PROBLEMAS AL CONECTAR LA BASE DE DATOS ");
        return $con;
}

public function insertar($codigo_producto, $descripcion, $fecha_venta, $fecha_salida, $precio_venta, $nombre_cli, $direccion, $proovedor, $codigo_garantia){
  mysqli_query($this->cone(),"INSERT INTO SALIDAS_ALMACEN (codigo_unico, descripcion, fecha_venta, fecha_salida, precio_venta, nombre_cliente, direccion_cliente, proovedor, codigo_garantia) 
        values ($codigo_producto, '$descripcion', '$fecha_venta', '$fecha_salida', $precio_venta, '$nombre_cli', '$direccion', '$proovedor', $codigo_garantia)") 
        or  die('<script language="javascript">alert("Ocurrio un error, vuelve a intentarlo.")</script>'.mysqli_error($this->cone()));
        mysqli_query($this->cone(),"UPDATE PEDIDOS SET estatus_envio='enviado' WHERE id_producto=$codigo_producto")
        or  die('<script language="javascript">alert("Ocurrio un error, vuelve a intentarlo.")</script>'.mysqli_error($this->cone()));
        echo '<script language="javascript">alert("Registro ingresado correctamente");
        window.location="registroSalidas.php";</script>';
        
}

public function Listar(){
    $registros=mysqli_query($this->cone(),"SELECT * from salidas_almacen") or die(mysqli_error($this->cone()));

    echo '
    <hr>
    <table class="table table-striped table-hover">
    
    <th>CÓDIGO ÚNICO</th>
    <th>DESCRIPCIÓN</th>
    <th>FECHA DE VENTA</th>
    <th>FECHA DE SALIDA DEL ALMACÉN</th>
    <th>PRECIO DE VENTA</th>
    <th style="width: 20%;">DATOS DEL CLIENTE</th>
    <th>PROOVEDOR</th>
    <th>CÓDIGO DE GARANTÍA</th>
    <th COLSPAN="2">ACCIONES</th>
  </tr>';
    while ($reg=mysqli_fetch_array($registros))
    {
      echo '<tr><td>'.$reg['codigo_unico'].'</td>';
      echo '<td>'.$reg['descripcion'].'</td>';
      echo '<td>'.$reg['fecha_venta'].'</td>';
      echo '<td>'.$reg['fecha_salida'].'</td>';
      echo '<td>'.$reg['precio_venta'].'</td>';
      echo '<td>'.$reg['nombre_cliente'].$reg['direccion_cliente'].'</td>';	
      echo '<td>'.$reg['proovedor'].'</td>';
      echo '<td>'.$reg['codigo_garantia'].'</td>'; 
      echo '<td><form method="POST"action="regSalidasElim.php">
         <input type="hidden" name="id"value="'.$reg['id_salida'].'"> 
         <input type="submit" class="btn btn-light" value="Eliminar"> 
        </form></td>';
        echo '<td><form method="POST"action="regSalidaseditar.php">
        <input type="hidden" name="ids"value="'.$reg['id_salida'].'"> 
        <input type="submit"class="btn btn-light" value="editar"> 
        </form>    </td>';
       
     
    }
    
    echo '</table>';	

}

public function listar_pedidos(){
  $i=0;
  $registros=mysqli_query($this->cone(),"SELECT * from pedidos where estatus_envio='proceso'") or die(mysqli_error($this->cone()));

  echo '
  <hr>
  <table class="table table-striped table-hover">
  
  <th>No. ORDEN DE COMPRA</th>
  <th>NOMBRE CLIENTE</th>
  <th>DIRECCION</th>
  <th>CODIGO UNICO</th>
  <th>PRECIO DE VENTA</th>
  <th>FECHA DE COMPRA</th>
  <th>CÓDIGO DE GARANTÍA</th>
  <th COLSPAN="2">ACCIONES</th>
</tr>';
  while ($reg=mysqli_fetch_array($registros))
  {
    $i++;
    $idcli=$reg['id_cliente'];
    $idprod=$reg['id_producto'];
    $datos_cliente= mysqli_query($this->cone(),"SELECT * from usuario where id_usuario=$idcli") or die(mysqli_error($this->cone()));
    $datos_cliente_array=mysqli_fetch_array($datos_cliente);
    $nombrecli=$datos_cliente_array['nombre'];
    $direcc_cli=$datos_cliente_array['direccion'];
    $precioven=($reg['total']/$reg['cantidad']);

    $datos_garantia= mysqli_query($this->cone(),"SELECT * from garantias where codigo_producto=$idprod") or die(mysqli_error($this->cone()));
    $datos_garantia_array=mysqli_fetch_array($datos_garantia);
    $codigo_gar=$datos_garantia_array['codigo_garantia'];
    if($reg['estatus_envio'] == "proceso"){
    echo '<tr><td>'.$reg['id_pedido'].'</td>';
    echo '<td>'.$nombrecli.'</td>';
    echo '<td>'.$direcc_cli.'</td>';
    echo '<td>'.$reg['id_producto'].'</td>';
    echo '<td>'.$precioven.'</td>';
    echo '<td>'.$reg['fecha_hora_compra'].'</td>';
    echo '<td>'.$codigo_gar.'</td>';
    echo '<td><form method="GET" action="">
       <input type="hidden" name="id" value="'.$idprod.'"> 
       <button type="button" style="float: right;" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#registro'.$i.'">Registrar Salida</button>
      </form></td>';
     
    }
  }
  
  echo '</table>';	

}

public function modal_salidas(){
  $i=0;
  $registros=mysqli_query($this->cone(),"SELECT * from pedidos where estatus_envio='proceso'") or die(mysqli_error($this->cone()));
  while ($reg=mysqli_fetch_array($registros)){
  $i++;
  $idcli=$reg['id_cliente'];
    $idprod=$reg['id_producto'];
    $datos_cliente= mysqli_query($this->cone(),"SELECT * from usuario where id_usuario=$idcli") or die(mysqli_error($this->cone()));
    $datos_cliente_array=mysqli_fetch_array($datos_cliente);
    $nombrecli=$datos_cliente_array['nombre'];
    $direcc_cli=$datos_cliente_array['direccion'];
    $precioven=($reg['total']/$reg['cantidad']);
    $fecha=date('Y-m-d ', time());

    $consulta_productos= mysqli_query($this->cone(),"SELECT * from productos where id_producto=$idprod") or die(mysqli_error($this->cone()));
    $array_productos= mysqli_fetch_array($consulta_productos);
    $descripcion=$array_productos['descripcion'];
    $imagen=$array_productos['imagen'];

    $datos_garantia= mysqli_query($this->cone(),"SELECT * from garantias where codigo_producto=$idprod") or die(mysqli_error($this->cone()));
    $datos_garantia_array=mysqli_fetch_array($datos_garantia);
    $codigo_gar=$datos_garantia_array['codigo_garantia'];
  echo '<div  class="modal" id="registro'.$i.'" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Registrar Salida</h5>
      </div>
      <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="">
      
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Codigo del Producto</label>
                                  <input type="number" value="'.$idprod.'" readonly name="nombre" class="form-control" id="producto" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>

                                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                        <center><img src="data:image/jpeg;base64,'.base64_encode($imagen) .' " alt="" style="margin-left:auto; margin-right: auto; display: block; width: 40%;"></center>
                        <textarea readonly class="form-control" name="descripcion">'.$descripcion.'</textarea>
                        
                        <div id="emailHelp" class="form-text"></div>
                      </div>
                                
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de venta</label>
                        <input type="text" name="fecha_compra" value="'.$reg['fecha_hora_compra'].'" readonly class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de salida del almacen</label>
                        <input type="text" name="fecha_ingreso" value="'.$fecha.'" readonly class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
      
                      
      
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio de venta</label>
                      <div class="input-group ">
                        <span class="input-group-text">$</span>
                        <input type="number" step="0.01" class="form-control" value="'.$precioven.'" readonly name="precio_venta" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text"></span>
                      </div>
                    </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Datos del cliente</label>
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" value="'.$nombrecli.'" readonly class="form-control" name="nombre_cli" >
                        
                        <label for="exampleInputEmail1" class="form-label">Direccion</label>
                        <input type="text" value="'.$direcc_cli.'" readonly class="form-control" name="direccion" >
                        
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                        <input type="text" class="form-control" id="producto" name="proovedor" required aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Codigo de Garantia</label>
                        <input type="number" readonly value="'.$codigo_gar.'" name="codigo_garantia" class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                                
                                
                              
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
          </form>
      </div>
    </div>
  </div>
</div>
  ';
  }
}


public function Listar2(){
  $registros=mysqli_query($this->cone(),"SELECT * from salidas_almacen where id_salida=$this->ids") or die(mysqli_error($this->cone()));
 while ($reg=mysqli_fetch_array($registros)){
 echo
 '<table class="table"><form action="regSalidaseditar2.php" method="post" >
 <h5>CÓDIGO ÚNICO</h5>
 <input class="form-control form-control-sm" required name="codigo_unico" type="text" value="'.$reg['codigo_unico'].'" aria-label=".form-control-sm example">
 <br>
 <h5>DESCRIPCIÓN</h5>
 <input class="form-control form-control-sm" required name="descripcion" type="text" value="'.$reg['descripcion'].'" aria-label=".form-control-sm example">
 <br>
 <h5>FECHA DE VENTA</h5>
 <input class="form-control form-control-sm" required name="fecha_venta" type="date" value="'.$reg['fecha_venta'].'" aria-label=".form-control-sm example">
 <br>
 <h5>FECHA DE SALIDA DEL ALMACÉN</h5>
 <input class="form-control form-control-sm" required name="fecha_salida" type="date" value="'.$reg['fecha_salida'].'" aria-label=".form-control-sm example">
 <br>
 <h5>PRECIO DE VENTA</h5>
 <input class="form-control form-control-sm" required name="precio_venta" type="text" value="'.$reg['precio_venta'].'" aria-label=".form-control-sm example">
 <br>
 <h5>PROVEEDOR</h5>
 <input class="form-control form-control-sm" required name="proovedor" type="text" value="'.$reg['proovedor'].'" aria-label=".form-control-sm example">
 <br>
 <h5>CÓDIGO DE GARANTÍA</h5>
 <input class="form-control form-control-sm" required name="codigo_garantia" type="text" value="'.$reg['codigo_garantia'].'" aria-label=".form-control-sm example">
 <br>
 <h5>DATOS DEL CLIENTE</h5>
 <HR>
 <h6>NOMBRE DEL CLIENTE</h6>
 <input class="form-control form-control-sm" required name="nombre_cliente" type="text" value="'.$reg['nombre_cliente'].'" aria-label=".form-control-sm example">
 <h6>DIRECCION DEL CLIENTE</h6>
 <input class="form-control form-control-sm" required name="direccion_cliente" type="text" value="'.$reg['direccion_cliente'].'" aria-label=".form-control-sm example">
 <input class="form-control form-control-sm" required name="ids" type="hidden" value="'.$reg['id_salida'].'" aria-label=".form-control-sm example">
 
 <BR>';
  }
  echo '</tr><tr><td colspan="8"><input type="submit"class="btn btn-primary" value="actualizar"></td></tr></form></table> <BR>';
}







public function Eliminar($id){
  $registro=mysqli_query($this->cone(),"select * from salidas_almacen
  where id_salida=$id") or die(mysqli_error($this->cone()));
  if($reg=mysqli_fetch_array($registro)){
      mysqli_query($this->cone(),"delete from salidas_almacen
      where id_salida=$id") or die(mysqli_error($this->cone()));
      echo "se borro satisfactoriamente ".$reg['descripcion'];
  }else{
      echo 'No existe un producto con dicho código ';
  }
}

public function modificar(){
  mysqli_query($this->cone(),"update salidas_almacen set codigo_unico='$this->codigo_unico ',descripcion='$this->descripcion',fecha_venta='$this->fecha_venta',fecha_salida='$this->fecha_salida',precio_venta='$this->precio_venta',nombre_cliente='$this->nombre_cliente',direccion_cliente='$this->direccion_cliente',proovedor='$this->proovedor',codigo_garantia ='$this->codigo_garantia 'where id_salida =$this->ids")
  or die ("problemas en la actualizacion".mysqli_error($this->cone()));
  echo "datos modificados correctamente <br><br>";
 
  $registro=mysqli_query($this->cone(),"select * from salidas_almacen
  where id=$this->ids") or die(mysqli_error($this->cone()));

  

}
 

}

?>
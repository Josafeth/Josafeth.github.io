<?php
class Entradas{


public function conectar (){
    $con=mysqli_connect("localhost","root","","alienexpres") or 
        die("PROBLEMAS AL CONECTAR LA BASE DE DATOS ");
        return $con;
}

public function insertar($codigo_producto, $imagen, $descripcion, $fecha_compra, 
$fecha_ingreso, $costo_compra, $precio_venta, $proovedor, $codigo_garantia){
        mysqli_query($this->conectar(),"INSERT INTO ENTRADAS_ALMACEN (codigo_producto, imagen, descripcion, fecha_compra, fecha_ingreso, costo_compra, precio_venta, proovedor, codigo_garantia) 
        values ($codigo_producto, '$imagen', '$descripcion', '$fecha_compra', '$fecha_ingreso', $costo_compra, $precio_venta, '$proovedor', $codigo_garantia)") 
        or  die('<script language="javascript">alert("Ocurrio un error, vuelve a intentarlo.")</script>'.mysqli_error($this->conectar()));
        echo '<script language="javascript">alert("Registro ingresado correctamente")</script>';
        $this->Desconectar();
    }

public function borrar($id_entrada){
        mysqli_query($this->conectar(),"DELETE FROM ENTRADAS_ALMACEN WHERE id_entrada=$id_entrada") or die (mysqli_error($this->conectar()));
        echo '<script language="javascript">alert("Eliminado correctamente")</script>';
    }
    
public function mostrar_todo(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia']
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_codigo(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by codigo_producto") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_fecha_compra(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by fecha_compra") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_fecha_ingreso(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by fecha_ingreso") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_costo_compra(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by costo_compra") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_precio_venta(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by precio_venta") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_proveedor(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by proovedor") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function ordenar_codigo_garantia(){
    $registros=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN order by codigo_garantia") or die(mysqli_error($this->conectar()));
    $respuesta = [];
        while ($reg=mysqli_fetch_array($registros))
        {
            $usuario = [
                'id_entrada' => $reg['id_entrada'],
                'codigo_producto' => $reg['codigo_producto'],
                'imagen' => $reg['imagen'],
                'descripcion' => $reg['descripcion'],
                'fecha_compra' => $reg['fecha_compra'],
                'fecha_ingreso' => $reg['fecha_ingreso'],
                'costo_compra' => $reg['costo_compra'],
                'precio_venta' => $reg['precio_venta'],
                'proovedor' => $reg['proovedor'],
                'codigo_garantia' => $reg['codigo_garantia'],
            ];
            array_push($respuesta, $usuario);
           
        } 

        return $respuesta;
}

public function Desconectar(){
    mysqli_close($this->Conectar()); 
}

public function actualizar(){
    $i = 0;
    $actualiza=mysqli_query($this->conectar(),"select * from ENTRADAS_ALMACEN") or die(mysqli_error($this->conectar()));
    while($act=mysqli_fetch_array($actualiza)){
        
        $i++;
        echo '<div  class="modal" id="actualizacion'.$i.'" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="modalTitle">Ingresar nuevos valores</h5>
                        </div>
                        <div class="modal-body">
                          <form method="POST" enctype="multipart/form-data" action="guardar_actualizacion.php">
                            <input name="id_entrada" type="hidden" value="'.$act['id_entrada'].'">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Codigo del Producto</label>
                              <input type="number" value="'.$act['codigo_producto'].'" name="nombre" class="form-control" id="producto" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="mb-3">
                             <img src="/'.$act['imagen'].'" style="width: 40%;" class="img-productos" alt="...">  
                              <div style="40%;"><label for="exampleInputEmail1" class="form-label">Inserta nueva imagen del producto (opcional)</label>
                              <input type="file" name= "foto" class="form-control" id="producto" aria-describedby="emailHelp">
                              </div>
                              <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Descripción del Producto</label>
                              <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3">'.$act['descripcion'].'</textarea>
                            </div>
  
                            
                   <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de compra</label>
                    <input type="datetime-local" value="'.$act['fecha_compra'].'" name="fecha_compra" class="form-control" id="producto" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de ingreso del almacen</label>
                    <input type="datetime-local" value="'.$act['fecha_ingreso'].'" name="fecha_ingreso" class="form-control" id="producto" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Costo de compra</label>
                  <div class="input-group ">
                    <span class="input-group-text">$</span>
                    <input type="number" value="'.$act['costo_compra'].'" step="0.01" class="form-control" name="costo_compra" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text"></span>
                  </div>
                </div>
  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio de venta</label>
                  <div class="input-group ">
                    <span class="input-group-text">$</span>
                    <input type="number" step="0.01" value="'.$act['precio_venta'].'" class="form-control" name="precio_venta" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text"></span>
                  </div>
                </div>
  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                    <input type="text" class="form-control" value="'.$act['proovedor'].'" id="producto" name="proovedor" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Codigo de Garantia</label>
                    <input type="number" value="'.$act['codigo_garantia'].'" name="codigo_garantia" class="form-control" id="producto" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                            
                            
                          
                        </div>
                        <div class="modal-footer">
                        
                          <button type="submit" name="aceptar" value="ok" class="btn btn-primary">Aceptar</button>
                          </div>  
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>';
                  
    }
}

public function guardarcambiosCompleto($id_entrada, $codigo_producto, $imagen, $descripcion, $fecha_compra, 
$fecha_ingreso, $costo_compra, $precio_venta, $proovedor, $codigo_garantia) 
{
    mysqli_query($this->conectar(),"UPDATE ENTRADAS_ALMACEN SET codigo_producto=$codigo_producto, imagen='$imagen', descripcion='$descripcion', 
    fecha_compra='$fecha_compra', fecha_ingreso='$fecha_ingreso', costo_compra=$costo_compra, precio_venta=$precio_venta, proovedor='$proovedor',
     codigo_garantia=$codigo_garantia WHERE id_entrada=$id_entrada")
    or  die("Problemas en el guardado".mysqli_error($this->conectar()));
    echo '<script language="javascript">alert("Registro actualizado exitosamente")</script>';
}

public function guardarcambiosSinFoto($id_entrada, $codigo_producto, $descripcion, $fecha_compra, 
$fecha_ingreso, $costo_compra, $precio_venta, $proovedor, $codigo_garantia) 
{
    mysqli_query($this->conectar(),"UPDATE ENTRADAS_ALMACEN SET codigo_producto=$codigo_producto, descripcion='$descripcion', 
    fecha_compra='$fecha_compra', fecha_ingreso='$fecha_ingreso', costo_compra=$costo_compra, precio_venta=$precio_venta, proovedor='$proovedor',
     codigo_garantia=$codigo_garantia WHERE id_entrada=$id_entrada")
    or  die("Problemas en el guardado".mysqli_error($this->conectar()));
    echo '<script language="javascript">alert("Registro actualizado exitosamente")</script>';
}

public function insertar_devolucion($codigo_garantia, $descripcion,  $fecha_solicitud, $id_cliente, $fecha_compra){
        mysqli_query($this->conectar(),"INSERT INTO DEVOLUCIONES (id_garantia, descripcion, fecha_solicitud, id_cliente, fecha_compra, estatus) 
        values ($codigo_garantia, '$descripcion', '$fecha_solicitud', $id_cliente, '$fecha_compra', 'proceso')") 
        or  die('<script language="javascript">alert("Ocurrio un error, vuelve a intentarlo.")</script>'.mysqli_error($this->conectar()));
        echo '<script language="javascript">alert("Devolucion registrada correctamente")</script>';
        $this->Desconectar();
    }



public function modales_devolucion(){
    $i = 0;
    $actualiza=mysqli_query($this->conectar(),"select * from pedidos") or die(mysqli_error($this->conectar()));
    while($act=mysqli_fetch_array($actualiza)){
        $x = $act['id_producto'];
        
        $nombre = mysqli_query($this->conectar(),"select * from productos where id_producto=$x") or die(mysqli_error($this->conectar()));
        $garantia=mysqli_query($this->conectar(),"select * from garantias where codigo_producto= $x") or die(mysqli_error($this->conectar()));
        $hola = mysqli_fetch_array($garantia);
        $hola2= mysqli_fetch_array($nombre);
        $i++;
        echo '<div  class="modal" id="devolucion'.$i.'" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitle">Devolver Producto</h5>
            </div>
            <div class="modal-body">
              <form method="GET" action="">

                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Motivo de la devolución</label>
                      <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" value="'.$act['id_cliente'].'">
                      <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
                      <input type="text" name="nombre_producto" value="'.$hola2['nombre_producto'].'" readonly class="form-control" id="producto" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                    
                  <label for="exampleInputEmail1" class="form-label">Fecha de compra</label>
                  <input type="text" name="fecha_compra" value="'.$act['fecha_hora_compra'].'" readonly class="form-control" id="producto" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Codigo de la garantia</label>';
                        if(!isset($hola['codigo_garantia'])){
                            echo '';
                        }else{
                            echo '<input type="text" name="codigo_garantia" readonly value="'.$hola['codigo_garantia'].'" class="form-control" id="producto" aria-describedby="emailHelp">';
                        }
                      
                      echo '<div id="emailHelp" class="form-text"></div>
                    </div>
                
              
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Devolver</button>
              </form>
            </div>
          </div>
        </div>
      </div>';
                  
    }
}

public function modales_devolucion_mas_30(){
  $i = 0;
  $actualiza=mysqli_query($this->conectar(),"select * from devoluciones where estatus='proceso'") or die(mysqli_error($this->conectar()));
  while($act=mysqli_fetch_array($actualiza)){
      $x = $act['id_garantia'];
      $garantia=mysqli_query($this->conectar(),"select * from garantias where codigo_garantia= $x") or die(mysqli_error($this->conectar()));
      $codigo_prod = mysqli_fetch_array($garantia);
      $codigo_prod1 = $codigo_prod['codigo_producto'];
      $nombre = mysqli_query($this->conectar(),"select * from productos where id_producto=$codigo_prod1") or die(mysqli_error($this->conectar()));
      $nombre_prod= mysqli_fetch_array($nombre);
      $nombre_prod1= $nombre_prod['nombre_producto'];
      $i++;
      echo '<div  class="modal"  id="asa3'.$i.'" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">FORMULARIO REPOSICIÓN</h5>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <h5>ID del producto</h5>
              <input class="form-control form-control-sm" value="'.$codigo_prod1.'" readonly name="id_producto" required type="text" placeholder="ID producto" aria-label=".form-control-sm example">
              <br>
              <h5>Nombre del producto</h5>
              <input class="form-control form-control-sm" name="nombre_producto" value="'.$nombre_prod1.'" required type="text" placeholder="Nombre del producto" aria-label=".form-control-sm example">
              <br>
              <h5>Código de garantía</h5>
              <input class="form-control form-control-sm" name="codigo_garantia" value="'.$x.'" readonly required type="text" placeholder="Código de garantía" aria-label=".form-control-sm example">
              <br>
              <h5>Nombre del proveedor</h5>
              <input class="form-control form-control-sm" name="nombre_proveedor" required type="tel" placeholder="Proveedor" aria-label=".form-control-sm example">
              <br>
              <h5>Dirección proveedor</h5>
              <textarea class="form-control form-control-sm" name="direccion_proveedor" id="exampleFormControlTextarea1" rows="3"></textarea>
              <br>
              <h5>Teléfono proveedor</h5>
              <input class="form-control form-control-sm" name="telefono_proveedor" required type="tel" placeholder="Teléfono" aria-label=".form-control-sm example">
              <br>
              <h5>ID solicitud de reposición</h5>
              <input class="form-control form-control-sm" name="id_solicitud" required type="tel" placeholder="ID reposición" aria-label=".form-control-sm example">
              <br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btn1" value="enviar"  >ENVIAR</button>
              </div>

            </form>
        </div>

        </div>
      </div>
    </div>';
                
  }
}

public function modalRecibos($id_usuario){
  $i = 0;
  $actualiza=mysqli_query($this->conectar(),"select * from pedidos where id_cliente='$id_usuario'") or die(mysqli_error($this->conectar()));
  while($act=mysqli_fetch_array($actualiza)){
      /*$x = $act['id_garantia'];
      $garantia=mysqli_query($this->conectar(),"select * from garantias where codigo_garantia= $x") or die(mysqli_error($this->conectar()));
      $codigo_prod = mysqli_fetch_array($garantia);
      $codigo_prod1 = $codigo_prod['codigo_producto'];
      $nombre = mysqli_query($this->conectar(),"select * from productos where id_producto=$codigo_prod1") or die(mysqli_error($this->conectar()));
      $nombre_prod= mysqli_fetch_array($nombre);
      $nombre_prod1= $nombre_prod['nombre_producto']; */
      $x = $act['id_producto'];
      $prod=mysqli_query($this->conectar(),"select * from productos where id_producto= $x") or die(mysqli_error($this->conectar()));
      $info_prod=mysqli_fetch_array($prod);
      $precio=$info_prod['precio_producto'];
      $imagen=$info_prod['imagen'];
      $i++;
      echo ' <div  class="modal" id="recibo'.$i.'" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
            
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">Factura</h5>
          </div>
          <div class="modal-body">
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Codigo del Producto</label>

                <center>'.$act['id_producto'].'</center>
                <div id="emailHelp" class="form-text"></div>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Inserta imagen del producto</label>
                <center><img src="data:image/jpeg;base64,'.base64_encode($imagen) .' " alt="" style="margin-left:auto; margin-right: auto; display: block; width: 40%;"></center>
                <div id="emailHelp" class="form-text"></div>
              </div>

              
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Fecha de compra</label>
      <center>'.$act['fecha_hora_compra'].'</center>
      <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Precio</label>
    <div class="input-group ">
      <span class="input-group-text">$'.$precio.'</span>
      
      
    </div>
  </div>

  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">cantidad</label>
    <div class="input-group ">
      <span class="input-group-text">'.$act['cantidad'].'</span>
    </div>
  </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Total</label>
      <span class="input-group-text">$'.$act['total'].'</span>
      <div id="emailHelp" class="form-text"></div>
    </div>

    
          
              
          <div class="modal-footer">        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
            
          </div>
        </div>
      </div>
    </div>
</div>
';
                
  }

}

}
?>
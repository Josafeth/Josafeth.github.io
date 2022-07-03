<?php session_start();

 if(!isset($_SESSION['nombre'])){
  echo '<script language="javascript">alert("Debes iniciar sesión");
  window.location="index.html";</script>';
  //header("Location: index.html");  
 } 

 function cerrar(){
  session_destroy();

  //header("Location: index.html");  
 }
 include 'entradas_alan.php';
 if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
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
    $obj = new Entradas();
    $obj->insertar($codigo_producto, $imagen, $descripcion, $fecha_compra, 
    $fecha_ingreso, $costo_compra, $precio_venta, $proovedor, $codigo_garantia);
  }
 } 
 
 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<script language="javascript">

function cerrarjs(){
  var result ="<"
  result += "?php cerrar(); ?>";
  alert('Hasta luego');
  document.write(result);
   window.location='index.html';
}


</script>
<body>
<header>
  
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    
      <a class="blog-header-logo text-dark" href="#"><img src="/imagenes/logochino.png" class="img-logo" alt=""> <br>AlienExpress</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
      <div class="container">
       
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
       
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorías
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Historial de entradas</a></li>
                    <li><a class="dropdown-item" href="#">Registrar entrada</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Historial de salidas</a></li>
                    <li><a class="dropdown-item" href="#">Registrar salida</a></li>
                  </ul>
                </li>
                
              </ul>
              <form class="d-flex"    role="search">
              <input class="form-control me-2"style="margin:5px ; width: 10rem;" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" style="margin:5px;"type="submit">Search</button>
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  Hola  <?php echo $_SESSION['nombre']?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" onclick= "cerrarjs()"  type="button"><b>Cerrar Sesion</b></button></li>
                  <li><button class="dropdown-item" type="button">Mi AlienExpress</button></li>
                  <li><button class="dropdown-item" type="button">Mis pedidos</button></li>
                  <li><button class="dropdown-item" type="button">Lista de Deseos</button></li>
                  <li><button class="dropdown-item" type="button">Centro de Mensajes</button></li>
                </ul>
              </div>
               
               </form>
               
               
        
        
            </div>
          </div>
       
      
        
      </div>
      
      
  </div><br>
 
</nav>


</header>



    <main id="mainAdmin">

        <br><br>
        <table id="tableAdmin">
            <tr>
                <th colspan="5">
                    <h2>Almacén</h2>
                </th>
            </tr>
            <tr>
                <td>
                    <a href="registroEntradas.php">
                        <h3> Consulta de Entradas</h3>
                    </a>
                </td>
                <td>
                    <a href="registroSalidas.php">
                        <h3> Consulta de Salidas</h3>
                    </a>
                </td>


            </tr>
            <tr>
                <td><button type="button" style="margin:5px; " data-bs-toggle="modal" data-bs-target="#registro">Registrar Entrada</button></td>
                <td><button type="button" style="margin:5px; " data-bs-toggle="modal" data-bs-target="#salida">Registrar Salida</button></td>

            </tr>
        </table>
        
    </main>
    <div  class="modal" id="salida" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitle">Salida del Producto</h5>
            </div>
            <div class="modal-body">
              <form>

                  <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Código del Producto</label>
                        <input type="text" class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
  
                      <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">No. de orden de compra</label>
                         <input type="text" class="form-control" id="producto" aria-describedby="emailHelp">
                         <div id="emailHelp" class="form-text"></div>
                       </div>
 
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Fecha de salida del almacén</label>
                          <input type="datetime-local" class="form-control" id="producto" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>

                
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Registrar</button>

            </div>
          </div>
        </div>
      </div>

    <footer class="blog-footer">
        <p>&#169 AlienExpress</p>
        <p>Todos los derechos reservados</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    
    <div  class="modal" id="registro" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalTitle">Ingresar Producto</h5>
                            </div>
                            <div class="modal-body">
                              <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Codigo del Producto</label>
                                  <input type="number" name="nombre" class="form-control" id="producto" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>

                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Inserta imagen del producto</label>
                                  <input type="file" name= "foto" class="form-control" id="producto" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>

                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Descripción del Producto</label>
                                  <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
      
                                
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de compra</label>
                        <input type="datetime-local" name="fecha_compra" class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de ingreso del almacen</label>
                        <input type="datetime-local" name="fecha_ingreso" class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Costo de compra</label>
                      <div class="input-group ">
                        <span class="input-group-text">$</span>
                        <input type="number" step="0.01" class="form-control" name="costo_compra" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text"></span>
                      </div>
                    </div>
      
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio de venta</label>
                      <div class="input-group ">
                        <span class="input-group-text">$</span>
                        <input type="number" step="0.01" class="form-control" name="precio_venta" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text"></span>
                      </div>
                    </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                        <input type="text" class="form-control" id="producto" name="proovedor" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                      </div>
      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Codigo de Garantia</label>
                        <input type="number" name="codigo_garantia" class="form-control" id="producto" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                                
                                
                              
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Aceptar</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

</body>


</html>
<?php session_start();
$id_usuario=$_SESSION['id_usuario'];

if(!$_SESSION){
  echo '<script language="javascript">alert("Debes iniciar sesión");
  window.location="index.html";</script>';
  //header("Location: index.html");  
 } 
 function cerrar(){
  session_destroy();
  //header("Location: index.html");  
 }

 include 'entradas_alan.php';
 if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $codigo_garantia = $_GET['codigo_garantia'];
    $descripcion = $_GET['descripcion'];
    $fecha_compra = $_GET['fecha_compra'];
    $nombre_producto = $_GET['nombre_producto'];
    $fecha_solicitud = date("Y-m-d");
    $id_cliente = $_SESSION['id_usuario'];
    $obj = new Entradas();
    $obj->insertar_devolucion($codigo_garantia, $descripcion, $fecha_solicitud, $id_cliente, $fecha_compra);
    $obj->Desconectar();
 }
 
?>
<!DOCTYPE html>
<html lang="es">
<script language="javascript">

function cerrarjs(){
  var result ="<"
  result += "?php cerrar(); ?>";
  alert('Hasta luego');
  document.write(result);
   window.location='index.html';
}


</script>

<!DOCTYPE html>
<html lang="es">

<?php

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">

                <a class="blog-header-logo text-dark" href="interfazUsuario.php"><img src="/imagenes/logochino.png" class="img-logo" alt=""> <br>AlienExpress</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


                <div class="container">



                    <div class="modal" id="asa" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle">Iniciar Sesión</h5>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>


                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">ENVIAR</button>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal" id="asa2" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle">REGISTRO USUARIO</h5>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <h5>Nombres</h5>
                                        <input class="form-control form-control-sm" required type="text" placeholder="Nombre" aria-label=".form-control-sm example">
                                        <br>
                                        <h5>Apellido Paterno</h5>
                                        <input class="form-control form-control-sm" required type="text" placeholder="Apellido Paterno" aria-label=".form-control-sm example">
                                        <br>
                                        <h5>Apellido Materno</h5>
                                        <input class="form-control form-control-sm" required type="text" placeholder="Apellido Materno" aria-label=".form-control-sm example">
                                        <br>
                                        <h5>Teléfono</h5>
                                        <input class="form-control form-control-sm" required type="tel" placeholder="Telefono" aria-label=".form-control-sm example">
                                        <br>
                                        <h5>Dirección</h5>
                                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <br>
                                        <h5>Sexo</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                        Hombre
                      </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                        Mujer
                      </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                        Otro
                      </label>
                                        </div>
                                        <br>
                                        <h5>Fecha nacimiento</h5>
                                        <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">
                                        <br>
                                        <h5>Correo</h5>

                                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                                        <br>
                                        <h5>Contraseña</h5>
                                        <input type="password" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">REGISTRAR</button>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorías
              </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Ropa Hombre</a></li>
                                <li><a class="dropdown-item" href="#">Ropa Mujer</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Tectnología</a></li>
                                <li><a class="dropdown-item" href="#">Hogar</a></li>
                                <li><a class="dropdown-item" href="#">Mascotas</a></li>
                                <li><a class="dropdown-item" href="#">Jardín</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" style="margin:5px ; width: 10rem;" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" style="margin:5px;" type="submit">Search</button>
                       
                    </form>

                     <!-- CODIGO QUE MODIFICO EDHER -->
              

                  <form action="carrito.php" method="post">
                       
                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
            
                       

                       <input  style="margin:5px; " class="btn btn-primary" type="submit" value="Carrito" id="botonAgregar">

                   </form >
                        <!--  -->
                        <!-- MAS CODIGO DE EDHER -->
            

                        <form action="pedidos.php" method="post">
                       
                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
            
                       

                       <input  style="margin:5px; " class="btn btn-primary" type="submit" value="Pedidos y Devoluciones" id="botonAgregar">

                   </form>

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
                      

                        <!--  -->




                </div>
            </div>


        </nav>


    </header>

    <div class="container">

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Moda Mujer</a>
                <a class="p-2 link-secondary" href="#">Moda hombre</a>
                <a class="p-2 link-secondary" href="#">Telefonía </a>
                <a class="p-2 link-secondary" href="#">comunicaciones</a>
                <a class="p-2 link-secondary" href="#">Deporte y exterior</a>
                <a class="p-2 link-secondary" href="#">Salud</a>
                <a class="p-2 link-secondary" href="#">belleza</a>
                <a class="p-2 link-secondary" href="#">peluquería</a>


            </nav>
        </div>
    </div>





    <main id="mainPedidos">
    <table  id="tablaPedidos">
    <tr><th> ID PEDIDO </th><th> ID USUARIO </th><th>ID PRODUCTO </th><th> FECHA </th><th> CANTIDAD </th><th> TOTAL </th><th> RECIBO </th><th> GARANTIA </th><th> ESTATUS </th><th> ACCIONES </th></tr>
    <?php
        $cnx=mysqli_connect("localhost","root","","alienexpres");
        $sql="SELECT pedidos.* FROM pedidos WHERE id_cliente='$id_usuario'  ORDER BY fecha_hora_compra DESC";
        $rta= mysqli_query($cnx,$sql);   //CONSULTA 
        $i=0;
        while ($mostrar=mysqli_fetch_array($rta)){   ///CICLO CONVIRTIENDO TODO EN UN ARREGLO Y MIENTRAS SEGUIRA 
            $i++;
    ?>
            <tr>
                <td><?php echo $mostrar['id_pedido']   ?></td>
                <td><?php echo $mostrar['id_cliente']   ?></td>
                <td><?php echo $mostrar['id_producto']   ?></td>
                <td><?php echo $mostrar['fecha_hora_compra']   ?></td>
                <td><?php echo $mostrar['cantidad']   ?></td>
                <td><?php echo $mostrar['total']   ?></td>

                <td>
                    <?php
                        echo '<button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#recibo'.$i.'">Recibo</button>';
                    ?>
                </td>
                <td> 
                    <?php 
                    if($mostrar['estatus_garantia'] == "generada"){
                        echo '<form method="POST" action="garantias_usuario.php"><input type="hidden" name="id_producto" value="'.$mostrar['id_producto'].'"><input type="submit" class="btn btn-primary btn-sm" value="VER GARANTIA"></form>';
                    } else{
                        echo 'garantia pendiente';
                    }
                    ?>
                </td>
                <td> 
                    <?php 
                    if(!$mostrar['estatus_envio'] == "enviado"){
                        echo 'envio pendiente';
                    } else{
                        echo 'producto enviado/en camino';
                    }
                    ?>
                </td>
                <td>
                    <!-- <a href="editarCompras.php"> Editar</a> -->
                    <?php 
                    if($mostrar['estatus_garantia'] == "generada"){
                        echo '<button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#devolucion'.$i.'">Devolucuion</button>';
                    } else{
                        echo 'garantia pendiente';
                    }
                    ?>
                    
                </td>

            </tr>
         <?php   
        }
        ?>
</table>
    </main  id="tablaPedidos">

    <footer class="blog-footer">
        <p>&#169 AlienExpress</p>
        <p>Todos los derechos reservados</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

   <?php
        $modal = new Entradas();
        $modal->modales_devolucion();
        $modal->modalRecibos($id_usuario);
   ?>



</body>

</html>
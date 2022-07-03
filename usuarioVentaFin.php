<?php
session_start();
 $nombre = $_SESSION['nombre'];
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
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $codigo_garantia = $_POST['codigo_garantia'];
    $descripcion = $_POST['descripcion'];
    $nombre_producto = $_POST['nombre_producto'];
    $fecha_solicitud = date("Y-m-d");
    $id_cliente = $_SESSION['id_usuario'];
    $obj = new Entradas();
    $obj->insertar_devolucion($codigo_garantia, $descripcion, $fecha_solicitud, $id_cliente, $nombre_producto);
    $obj->Desconectar();
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

<!-- AQUI INICIA EL NUEVO NAV  -->
<header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <a class="blog-header-logo text-dark" href="#"><img src="/imagenes/logochino.png" class="img-logo" alt=""> <br>AlienExpress</a>

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
                                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
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
                    <button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#asa">Login</button>
                    <button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#asa2">Regístrate</button>

                </form>




            </div>
        </div>



        </div>


        </div><br>

    </nav>


</header>


<!-- AQUI ACABA EL NUEVO NAV  -->


<body>
    <div style="width:40% ; margin-left: auto; margin-right: auto ;text-align: center">
        <img src="imagenes/reloj.png" alt="" style="margin-left:auto; margin-right: auto; display: block; width: 40%;">
        <p id="escritoGarantia" style="margin-left:auto; margin-right:auto; text-align: justify;">
            
            PRODUCTO: Reloj de Cuarzo<BR>  
            PRECIO: $700.00 <BR>
            CANTIDAD: 1
            COMPRADOR: Gómez Reyes Alan <br>
            DIRECCIÓN: Torre latinoamericana No. 96 C.P. 57740 CD Nezahualcóyotl <br>
            <a href="garantiaGenerada.html">
            Ver garantía
            </a><br>
            <button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#devolucion">Solicitar devolución</button>
        </p>
        
    </div>



    <footer class="blog-footer">
        <p>&#169 AlienExpress</p>
        <p>Todos los derechos reservados</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>



    <div  class="modal" id="devolucion" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitle">Devolver Producto</h5>
            </div>
            <div class="modal-body">
              <form method="POST" action="">

                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Motivo de la devolución</label>
                      <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" value="<?php echo $_SESSION['id_usuario']?>">
                      <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
                      <input type="text" name="nombre_producto" class="form-control" id="producto" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Codigo de la garantia</label>
                      <input type="text" name="codigo_garantia" class="form-control" id="producto" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                
              
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Devolver</button>
              </form>
            </div>
          </div>
        </div>
      </div>


</body>

</html>
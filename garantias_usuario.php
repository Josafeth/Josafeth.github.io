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
                    

                </form>
                <script language="javascript">

function cerrarjs(){
  var result ="<"
  result += "?php cerrar(); ?>";
  alert('Hasta luego');
  document.write(result);
   window.location='index.html';
}

</script>
<head>

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



            </div>
        </div>



        </div>


        </div><br>

    </nav>


</header>


<!-- AQUI ACABA EL NUEVO NAV  -->


<body>
    <div style="width:40% ; margin-left: auto; margin-right: auto ;text-align: center">
        <?php
            $id_producto = $_POST['id_producto'] ;
            $cnx=mysqli_connect("localhost","root","","alienexpres");
            $sql="SELECT imagen FROM productos  WHERE id_producto=$id_producto";
            $rta= mysqli_query($cnx,$sql);
            

            if($mostrar=mysqli_fetch_array($rta)){
                echo '<img src="data:image/jpeg;base64,'.base64_encode($mostrar['imagen']) .' " alt="" style="margin-left:auto; margin-right: auto; display: block; width: 40%;">';
            }
            
    
        ?>
        
        <p id="escritoGarantia" style="margin-left:auto; margin-right:auto; text-align: justify;">
            AlienExpress, S. A. de C. V. garantiza por 30 días a partir de la fecha de compra, el funcionamiento de este producto contra cualquier defecto en los materiales y mano de obra empleados para su fabricación. Nuestra garantía incluye la reparación, reposición,
            o cambio del producto y/o componentes sin cargo alguno para el cliente, incluyendo mano de obra, así como los gastos de transportación derivados del cumplimiento de este certificado. AlienExpress, S. A. de C. V. Se compromete a entregar el
            producto en un lapso no mayor de 30 días contados a partir de la fecha de recepción del mismo en nuestros talleres de servicio. No reasumirá responsabilidad alguna en caso de demora del servicio por causas de fuerza mayor. Para hacer efectiva
            esta garantía, no podrán exigirse mayores requisitos que presentarla sellada por el establecimiento comercial donde se adquirió, de no contar con ésta bastará la factura de compra. ESTA GARANTIA NO SERÁ VÁLIDA BAJO LAS SIGUIENTES CONDICIONES
            <ol>
                <li>Cuando esta póliza manifestara claros signos de haber sido alterada en los datos originales consignados en ella.</li>
                <li>Cuando el uso, cuidado y operación del producto no haya sido de acuerdo con las instrucciones contenidas en el instructivo de operación.</li>
                <li>Cuando el producto haya sido usado fuera de su capacidad, maltratado, golpeado, expuesto a la humedad, molada por algún líquido o substancia corrosiva, así como por cualquiera otra falla atribuible al consumidor.</li>
                <li>Cuando el producto haya sido desarmado, modificado o reparado por personas no autorizadas por AlienExpress.</li>
                <li>Cuando la falla sea originada por el desgaste normal de las piezas debido al uso. Ninguna otra garantía verbal o escrita diferente a la aquí expresada será reconocida por Manufacturera del Norte. NOTA: En caso de extravío de la presente
                    garantía, el consumidor deberá recurrir a su proveedor para que le sea expedida otra, previa presentación de la nota de compra o factura respectiva.</li>

                <ol>
                    <br> AlienExpress, S. A. de C. V. Ave. Central 213, Col. Industria Nueva Monterrey, N. L. C. P. 44200, Tel. 2346-5789
        </p>
    </div>



    <footer class="blog-footer">
        <p>&#169 AlienExpress</p>
        <p>Todos los derechos reservados</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>





</body>

</html>
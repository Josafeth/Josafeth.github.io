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
    
      <a class="blog-header-logo text-dark" href="interfazUsuario.php"><img src="/imagenes/logochino.png" class="img-logo" alt=""> <br>AlienExpress</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
      <div class="container">
       
         
    
         <div  class="modal" id="asa" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTitle">Iniciar Sesión</h5>
                    </div>
                    <div class="modal-body">
                      <form action="seleccionarPerfil.html">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">ENVIAR</button>
                           
                        </div>
                        
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
             
    
              <div  class="modal"  id="asa2" tabindex="-1" aria-hiden="true" aria-labelledby="modalTitle">
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
                        <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1" >
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
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Tectnología</a></li>
                    <li><a class="dropdown-item" href="#">Hogar</a></li>
                    <li><a class="dropdown-item" href="#">Mascotas</a></li>
                    <li><a class="dropdown-item" href="#">Jardín</a></li>
                  </ul>
                </li>
                
              </ul>
              <form class="d-flex"    role="search">
              <input class="form-control me-2"style="margin:5px ; width: 10rem;" id="busqueda" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" id="busqueda" style="margin:5px;"type="submit">Search</button>

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
       
      
        
      </div>
      
      
  </div><br>
 
</nav>


</header>


<!-- AQUI ACABA EL NUEVO NAV  -->


<body>
    
  
  
  <main class="container">
    
      
        <img src="imagenes/BANNER.png" class="img-productos" alt="...">
      
    
  
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Lo más pedido</strong>
            <h3 class="mb-0"></h3>
            
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col">
                <img src="/imagenes/pc-sobremesa.jpg" class="img-productos" alt="...">
              </div>
              <div class="col">
                <img src="/imagenes/pc-sobremesa.jpg" class="img-productos" alt="...">
              </div>
              <div class="col">
                <img src="/imagenes/pc-sobremesa.jpg" class="img-productos" alt="...">
              </div>
            </div>
          </div>



            
            
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Sugerencias</strong>
            <h3 class="mb-0"></h3>
            
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col">
                <img src="/imagenes/pc-sobremesa.jpg" class="img-productos" alt="...">
              </div>
              <div class="col">
                <img src="/imagenes/pc-sobremesa.jpg" class="img-productos" alt="...">
              </div>
              <div class="col">
                <img src="/imagenes/pc-sobremesa.jpg" class="img-productos" alt="...">
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          Seguro que te gusta
        </h3>
      <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

     

      <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                  <div class="card shadow-sm">
                      <img src="imagenes/618Ma5gps2L._AC_SS450_.jpg">
                      <div class="card-body">
                          <h5 class="card-title">Celular Samsung Galaxy A52</h5>
                          <p class="card-text">$ 9000.00</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                  <a href="#" class="btn btn-primary">Detalles</a>
                              </div>
                              <form action="carrito_pross.php" method="post">
                        <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                        <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '23764804' ?>">
                        <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Celular Samsung Galaxy A52' ?>">
                        <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '9000' ?>" >

                        <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                    </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="imagenes/D_NQ_NP_695663-MLA44352708064_122020-O.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Sony Audífonos inalámbricos Negro</h5>
                        <p class="card-text">$ 1533.00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                            <form action="carrito_pross.php" method="post">
                       
                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '698124573' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Sony Audífonos inalámbricos Negro' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '1533' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                  <img src="imagenes/61VOUcps7lL._AC_SY355_.jpg">
                  <div class="card-body">
                      <h5 class="card-title">Organizador de Maquillaje</h5>
                      <p class="card-text">$ 399.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <a href="#" class="btn btn-primary">Detalles</a>
                          </div>
                          <form action="carrito_pross.php" method="post">
                       
                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '362487910' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Organizador de Maquillaje' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '399' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
                <img src="imagenes/sombras.jpg">
                <div class="card-body">
                    <h5 class="card-title">Paleta de sombras 120 Colores</h5>
                    <p class="card-text">$ 398.00</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>
                        <form action="carrito_pross.php" method="post">

                        <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '589721346' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Paleta de sombras 120 Colores' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '398' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
              <img src="imagenes/playera-tommy-hilfiger.jpg">
              <div class="card-body">
                  <h5 class="card-title">Playera Tommy Hilfiger </h5>
                  <p class="card-text">$ 1099.00</p>
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <a href="#" class="btn btn-primary">Detalles</a>
                      </div>
                      <form action="carrito_pross.php" method="post">

                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '900487143' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Playera Tommy Hilfiger' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '1099' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
            <img src="imagenes/pantalon.jpg">
            <div class="card-body">
                <h5 class="card-title">Pantalón de Mezclilla para mujer</h5>
                <p class="card-text">$ 1350.00</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary">Detalles</a>
                    </div>
                    <form action="carrito_pross.php" method="post">
                       
                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '464300017' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Pantalón de Mezclilla para mujer' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '1350' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
          <img src="imagenes/air.png">
          <div class="card-body">
              <h5 class="card-title">Tenis Air Max 270</h5>
              <p class="card-text">$ 3500.00</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href="#" class="btn btn-primary">Detalles</a>
                  </div>
                  <form action="carrito_pross.php" method="post">
                       
                      <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '412369' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Tenis Air Max 270' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '3500' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
              </div>
          </div>
      </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
        <img src="imagenes/tenis.png">
        <div class="card-body">
            <h5 class="card-title">	 Tenis Breaknet</h5>
            <p class="card-text">$ 1500.00</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Detalles</a>
                </div>
                <form action="carrito_pross.php" method="post">
                       
                      <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '106479532' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo ' Tenis Breaknet' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '1500' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
            </div>
        </div>
    </div>
</div>
<div class="col">
  <div class="card shadow-sm">
      <img src="imagenes/nupec.png">
      <div class="card-body">
          <h5 class="card-title">Alimento para perro </h5>
          <p class="card-text">$ 238.00</p>
          <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <a href="#" class="btn btn-primary">Detalles</a>
              </div>
              <form action="carrito_pross.php" method="post">
                       
                      <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '965731284' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo ' Alimento para perro' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '238' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
          </div>
      </div>
  </div>
</div>
<div class="col">
  <div class="card shadow-sm">
      <img src="imagenes/perro.jpg">
      <div class="card-body">
          <h5 class="card-title">Juego de 7 pzs para perro</h5>
          <p class="card-text">$ 279.00</p>
          <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <a href="#" class="btn btn-primary">Detalles</a>
              </div>
              <form action="carrito_pross.php" method="post">


                      <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '649875564' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Juego de 7 pzs para perro' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '279' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
          </div>
      </div>
  </div>
</div>
<div class="col">
  <div class="card shadow-sm">
      <img src="imagenes/81gbXlbu28L._AC_SX425_.jpg">
      <div class="card-body">
          <h5 class="card-title">Lego Lamborghini 3500pzs</h5>
          <p class="card-text">$ 7500.00</p>
          <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <a href="#" class="btn btn-primary">Detalles</a>
              </div>
              <form action="carrito_pross.php" method="post">
                       
                      <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '468752365' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Lego Lamborghini 3500pzs' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '7500' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
          </div>
      </div>
  </div>
</div>


<div class="col">
  <div class="card shadow-sm">
      <img src="imagenes/barra.jpg">
      <div class="card-body">
          <h5 class="card-title">Barra Olimpica 20 libras</h5>
          <p class="card-text">$ 2350.00</p>
          <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <a href="#" class="btn btn-primary">Detalles</a>
              </div>
              <form action="carrito_pross.php" method="post">
                       
                       <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario ?>">
                       <input type="hidden" id="id_producto" name="id_producto" value="<?php echo '54789652' ?>">
                       <input type="hidden" id='nombre_producto' name='nombre_producto' value="<?php echo 'Barra Olimpica 20 libras' ?>">
                       <input type="hidden" id='precio_producto' name='precio_producto' value="<?php echo '2350' ?>" >

                       <input  class="btn btn-primary" type="submit" value="Agregar" id="botonAgregar">

                   </form>
          </div>
      </div>
  </div>
</div>
  
      </div>
  

  
          
        </div>



              
      </div>
          </div>
  
        
  
         
        </div>
      </div>
    </div>
  
  </main>
  
  <footer class="blog-footer">
    <p>&#169 AlienExpress</p>
    <p>Todos los derechos reservados</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
  
  
      
    
  
  </body>
</html>
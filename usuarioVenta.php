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
<body>
  <header>
  
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      
        <a class="blog-header-logo text-dark" href="#"><img src="/imagenes/logochino.png" class="img-logo" alt=""> <br>AlienExpress</a>
     
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
                <input class="form-control me-2"style="margin:5px ; width: 10rem;" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success" style="margin:5px;"type="submit">Search</button>
                 <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['nombre']?>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button"><b>Cerrar Sesion</b></button></li>
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
    
  <div class="container">
     
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="#">Moda Mujer</a>
        <a class="p-2 link-secondary" href="#">Moda hombre</a>
        <a class="p-2 link-secondary" href="#">Telefonía  </a>
        <a class="p-2 link-secondary" href="#">Comunicaciones</a>
        <a class="p-2 link-secondary" href="#">Deporte y exterior</a>
        <a class="p-2 link-secondary" href="#">Salud</a>
        <a class="p-2 link-secondary" href="#">Belleza</a>
        <a class="p-2 link-secondary" href="#">Peluquería</a>
        
        
      </nav>
    </div>
  </div>
  <div class="row mb-2">
    
    <div class="col-md-6" style="width: 90%; margin: auto;">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><b>Pedidos</b></strong>
          <h3 class="mb-0"></h3>
          
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
              </svg>
              <p class="text-center">Pendientes de pago</p>
            </div>
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" fill="currentColor" class="bi bi-send-exclamation" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
              </svg>
              <p class="text-center">Pendientes de Envío</p>
            </div>
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
              </svg>
              <p class="text-center">Enviado</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  
  <main class="container">
    
    <table class="table table-striped table-hover">
      <tr>
        <form action="usuarioVentaFin.php">
        <div class="col">
          <img style="width: 25%" src="/imagenes/reloj.png" class="img-productos" alt="...">
          Reloj de cuarzo - Modelo IH90
          Cantidad: <input type="number" value="1">
          Precio: $700.00
          
          <input type="submit" value="Comprar">
        </div> 
        </form>
      </tr>
    </table>
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
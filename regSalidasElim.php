<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
</head>

    
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
                 <button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#asa">Login</button>
                 <button type="button" style="margin:5px; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#asa2">Regístrate</button>
                 
                 </form>
                 
                 
          
          
              </div>
            </div>
         
        
          
        </div>
        
        
    </div><br>
   
  </nav>
  
  
  </header>
  
  <body>
  <main class="container">
    
      <BR><center><p class="h1">REGISTRO DE SALIDAS</p><hr><BR></BR></center>  
      <?php
    require_once("salidas_modelo.php");
    $ids=$_REQUEST['id'];
    $emp1=new Salidas();
    
      ?>
  <div class="alert alert-primary" >
  <?php
    $emp1->Eliminar($ids);
  ?>
  </div>
  <?php
$emp1->Listar();
  ?>
  <div class="d-grid gap-2">
          <button class="btn btn-primary" type="button">Agregar</button>
        </div>

        
  </main>
</body>
  <footer class="blog-footer">
    <p>&#169 AlienExpress</p>
    <p>Todos los derechos reservados</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

  
  
      
    
  
  </body>
</html>
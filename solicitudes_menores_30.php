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
            
              <form class="d-flex"    role="search">
              
               <div class="dropdown" style="margin-right: 80px; ">
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





    <main id="mainSolicitudes">
    <table  id="tablaSolicutudes">
    <tr><th> ID DEVOLUCIÓN </th><th> ID GARANTIA </th><th> FECHA DE SOLICITUD </th><th>  FECHA DE COMPRA  </th><th> ID CLIENTE   </th> <th> DESCRIPCIÓN  </th><th>STATUS</th><th colspan="2">ACCION</th></tr>
    <?php


        $cnx=mysqli_connect("localhost","root","","alienexpres");
        $sql="SELECT * FROM devoluciones WHERE estatus='proceso' ORDER BY fecha_solicitud DESC";
        $rtd=mysqli_query($cnx,$sql);
    ?>
    <?php
        while($filtrar=mysqli_fetch_array($rtd)){
            $start_date=strtotime($filtrar['fecha_compra']);
            $end_date=strtotime($filtrar['fecha_solicitud']);
            $res=($end_date - $start_date)/60/60/24;


            if($res<30){
    ?>
            <tr>
                <td><?php echo $filtrar['id_devolucion']   ?></td>
                <td><?php echo $filtrar['id_garantia']   ?></td>
                <td><?php echo $filtrar['fecha_solicitud']   ?></td>
                <td><?php echo $filtrar['fecha_compra']   ?></td>
                <td><?php echo $filtrar['id_cliente']   ?></td>
                <td><?php echo $filtrar['descripcion']   ?></td>
                <td><?php echo $filtrar['estatus']  ?></td>
                <td>
                <form action="rechazar_menor_30.php" method="post">
                        <input type="hidden" id='id_devolucion' name='id_devolucion' value="<?php echo $filtrar['id_devolucion']; ?>">
                        <input type="hidden" id='id_garantia' name='id_garantia' value="<?php echo $filtrar['id_garantia']; ?>">
                        <input type="hidden" id='descripcion' name='descripcion' value="<?php echo $filtrar['descripcion']; ?>">
            

                        <input type="submit" value="RECHAZAR" id="garantiaBoton">

                    </form>
                </td>
                <td>
                <form action="aceptar_menor_30.php" method="post">
                        <input type="hidden" id='id_devolucion' name='id_devolucion' value="<?php echo $filtrar['id_devolucion']; ?>">
                        <input type="hidden" id='id_garantia' name='id_garantia' value="<?php echo $filtrar['id_garantia']; ?>">
                        <input type="hidden" id='descripcion' name='descripcion' value="<?php echo $filtrar['descripcion']; ?>">
            

                        <input type="submit" value="ACEPTAR" id="garantiaBoton">

                    </form>
                </td>

            </tr>
        <?php

            }
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




</body>

</html>
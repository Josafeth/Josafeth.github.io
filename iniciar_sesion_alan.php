<?php
class Iniciar{
    private $correo;
    private $contraseña;

    /*public function inicializar($correo, $contraseña){
        $this->correo =  $correo;
        $this->contraseña = $contraseña;
    } */

    public function conectar (){
        $con=mysqli_connect("localhost","root","","alienexpres") or 
            die("PROBLEMAS AL CONECTAR LA BASE DE DATOS ");
            return $con;
    }

    public function Desconectar(){
        mysqli_close($this->Conectar());
      
  }

  public function validarUsuario($correo,$contraseña){
    $registro=mysqli_query($this->conectar(),"select tipo_usuario from usuario where correo='$correo' and password='$contraseña' ") or die("problemas en el select".mysqli_error($this->Conectar()));
    if($reg=mysqli_fetch_array($registro)){
            if($reg['tipo_usuario'] == "cli"){
                header("Location: interfazUsuario.php");
            } elseif($reg['tipo_usuario'] == "alm") {
                header("Location: almacen.php");  
            } elseif($reg['tipo_usuario'] == "com") {
                header("Location: compras.php");  
            }else{
                header("Location: ventas.php");  
            }
    }else{
        echo '<script language="javascript">alert("Usuario o Contraseña incorrectos");
        window.location="index.html";</script>';
    }
 }

 public function obtener_nombre($correo,$contraseña){
    $registro=mysqli_query($this->conectar(),"select nombre from usuario where correo='$correo' and password='$contraseña' ") or die("problemas en el select".mysqli_error($this->Conectar()));
    if($reg=mysqli_fetch_array($registro)){
        return $reg['nombre'];
    }
    $this->Desconectar();
 }

 public function obtener_id($correo,$contraseña){
    $registro=mysqli_query($this->conectar(),"select id_usuario from usuario where correo='$correo' and password='$contraseña' ") or die("problemas en el select".mysqli_error($this->Conectar()));
    if($reg=mysqli_fetch_array($registro)){
        return $reg['id_usuario'];
    }
    $this->Desconectar();
 }
}
?>
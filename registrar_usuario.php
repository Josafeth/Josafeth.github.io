<?php
class In{
    private  $id_usuario;
    private  $nombre; 
    private  $apellido_paterno; 
    private  $apellido_materno; 
    private  $telefono; 
    private  $direccion; 
    private  $sexo; 
    private  $fecha_nacimiento; 
    private  $tipo_usuario; 
    private  $correo; 
    private  $password;

public function inicializar($nombre,$apellido_paterno,$apellido_materno,$telefono,$direccion,$sexo,$fecha_nacimiento,$correo,$password){
      
      $this->nombre=$nombre; 
      $this->apellido_paterno=$apellido_paterno; 
      $this->apellido_materno=$apellido_materno; 
      $this->telefono=$telefono; 
      $this->direccion=$direccion; 
      $this->sexo=$sexo; 
      $this->fecha_nacimiento=$fecha_nacimiento; 
      $this->correo=$correo; 
      $this->password=$password;
}
public function cone(){
    $con=mysqli_connect("localhost","root","","alienexpres") or die("Problemas con la conexión a la base de datos");

    return $con;
}



public function insertar(){
    $registro=mysqli_query($this->cone(),"select* from usuario where correo='$this->correo'")
    or die(mysqli_error($this->cone()));

    
    if($reg=mysqli_fetch_array($registro)){
        echo '<script language="javascript">alert("El usuario ya existe");
        window.location="index.html";</script>';
    }else{
        mysqli_query($this->cone(),("insert into usuario(nombre,apellido_paterno,apellido_materno,telefono,direccion,sexo,fecha_nacimiento,correo,password, tipo_usuario) 
        values ('$this->nombre','$this->apellido_paterno','$this->apellido_materno','$this->telefono','$this->direccion','$this->sexo', '$this->fecha_nacimiento','$this->correo','$this->password', 'cli')")) or  die("Problemas en el insert".mysqli_error($this->cone()));
        echo '<script language="javascript">alert("Registro exitoso");
        window.location="index.html";</script>';
    }  
}






}
?>
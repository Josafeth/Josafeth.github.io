<?php

class Proveedor{

    private $id_producto;
    private $nombre_producto;
    private $codigo_garantia;
    private $nombre_proveedor;
    private $direccion_proveedor;
    private $telefono_proveedor;
    private $id_solicitud;


    public function Inicializar($id_producto,$nombre_producto,$codigo_garantia,$nombre_proveedor,$direccion_proveedor,$telefono_proveedor,$id_solicitud){
        $this->id_producto=$id_producto;
        $this->nombre_producto=$nombre_producto;
        $this->codigo_garantia=$codigo_garantia;
        $this->nombre_proveedor=$nombre_proveedor;
        $this->direccion_proveedor=$direccion_proveedor;
        $this->telefono_proveedor=$telefono_proveedor;
        $this->id_solicitud=$id_solicitud;


    }

    public function conectar(){

        $con=mysqli_connect("localhost","root","","alienexpres") or die("Problemas con la conexión a la base de datos");

        return $con;
    }

    public function insertar(){
        mysqli_query($this->conectar(),"INSERT INTO proveedor(id_producto,nombre_producto,codigo_garantia,nombre_proveedor,direccion_proveedor,
        telefono_proveedor,id_solicitud) values($this->id_producto,'$this->nombre_producto',$this->codigo_garantia,'$this->nombre_proveedor','$this->direccion_proveedor',
        $this->telefono_proveedor,$this->id_solicitud)")  or  die("Problemas en el insert".mysqli_error($this->conectar()));
        echo '<script language="javascript">alert("Registro ingresado correctamente")</script>';
    }
    public function desconectar(){
        mysqli_close($this->conectar());
    }

}

?>
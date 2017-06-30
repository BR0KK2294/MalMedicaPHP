<?php
require_once("../Datos/Conexion.php");

class TipoFarmaco
{  private $id_tipo_farmaco;
   private $descripcion_tipo;

   public function __construct(){}

   public function TipoFarmaco($id_tipo_farmaco,$descripcion_tipo)
   { $this->id_tipo_farmaco=$id_tipo_farmaco;
     $this->descripcion_tipo=$descripcion_tipo;


   }

   public function getId_tipo_farmacol()                {return $this->id_tipo_farmaco;}
   public function getDescripcion_tipo()                {return $this->descripcion_tipo;}





   public function setId_tipo_farmacol($id_tipo_farmaco)             {$this->id_tipo_farmaco=$id_tipo_farmaco;}
   public function setDescripcion_tipo($descripcion_tipo)            {$this->descripcion_tipo=$descripcion_tipo;}





   public function ingresarTipoFarmaco()
      { $objConex=new Conexion();
        $sql="INSERT INTO tipo_farmaco VALUES('".$this->id_tipo_farmaco."','".$this->descripcion_tipo."')";
        $resul=$objConex->generarTransaccion($sql);
        return $resul;

	  }


public function modificarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="UPDATE tipo_farmaco SET DESCRIPCION_TIPO='".$this->descripcion_tipo."'  WHERE(ID_TIPO_FARMACO=".$this->id_tipo_farmaco.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }

public function eliminarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="DELETE FROM tipo_farmaco WHERE(ID_TIPO_FARMACO='".$this->id_tipo_farmaco."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }

public function buscarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="SELECT * FROM tipo_farmaco WHERE(ID_TIPO_FARMACO='".$this->id_tipo_farmaco."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   }

public function listarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="SELECT * FROM tipo_farmaco";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   }




}
?>

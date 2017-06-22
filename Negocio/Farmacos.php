<?php
require_once("../Datos/Conexion.php");

class Farmacos
{  private $id_farmaco;
   private $descripcion_farmaco;
   private $precio_farmaco;
   private $unidad;
   private $id_tipo_farmaco;

   
   public function __construct(){}
   
   public function Farmacos($id_farmaco,$descripcion_farmaco,$precio_farmaco,$unidad,$id_tipo_farmaco)
   { $this->id_farmaco=$id_farmaco;
     $this->descripcion_farmaco=$descripcion_farmaco;
	 $this->precio_farmaco=$precio_farmaco;
	 $this->unidad=$unidad;
	 $this->id_tipo_farmaco=$id_tipo_farmaco;
	
	   
   }
   //ACCESADORES
   public function getId_farmaco()                  {return $this->id_farmaco;} 
   public function getDescripcion_farmaco()         {return $this->descripcion_farmaco;}
   public function getPrecio_farmaco()              {return $this->precio_farmaco;}
   public function getUnidad()      	            {return $this->unidad;}
   public function getId_tipo_farmaco()      	    {return $this->id_tipo_farmaco;}
 
   
   
      //MUTANTES
   public function setId_farmaco($id_farmaco)                           {$this->id_farmaco=$id_farmaco;}
   public function setDescripcion_farmaco($descripcion_farmaco)         {$this->descripcion_farmaco=$descripcion_farmaco;}
   public function setPrecio_farmaco($precio_farmaco)       {$this->precio_farmaco=$precio_farmaco;}
   public function setUnidad($unidad)                                   {$this->unidad=$unidad;}
   public function setId_tipo_farmaco($id_tipo_farmaco)                 {$this->id_tipo_farmaco=$id_tipo_farmaco;}
   
  
  

   //CUSTOMIZED O BUSINESS
   
   public function ingresarFarmaco()
      { $objConex=new Conexion();
        $sql="INSERT INTO FARMACOS VALUES('".$this->id_farmaco."','".$this->descripcion_farmaco."','".$this->precio_farmaco."','".$this->unidad."','".$this->id_tipo_farmaco."')";
        $resul=$objConex->generarTransaccion($sql);
   return $resul; 
	 
	  }
   
  
public function modificaFarmaco()
   { $objConex=new Conexion();
     $sql="UPDATE FARMACOS SET DESCRIPCION_FARMACO='".$this->descripcion_farmaco."',PRECIO_FARMACO='".$this->precio_farmaco."',UNIDAD='".$this->unidad."',ID_TIPO_FARMACO='".$this->id_tipo_farmaco."'  WHERE(ID_FARMACO=".$this->id_farmaco.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   } 
   
public function eliminarFarmaco()
   { $objConex=new Conexion();
     $sql="DELETE FROM FARMACOS WHERE(ID_FARMACO='".$this->id_farmaco."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   }
   
public function buscarFarmaco()
   { $objConex=new Conexion();
     $sql="SELECT * FROM FARMACOS WHERE(ID_FARMACO='".$this->id_farmaco."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;   
   }

public function listarFarmaco()
   { $objConex=new Conexion();
     $sql="SELECT * FROM FARMACOS";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;   
   } 
   



}
?>
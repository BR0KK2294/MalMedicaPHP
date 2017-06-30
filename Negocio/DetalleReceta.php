<?php
require_once("../Datos/Conexion.php");

class DetalleReceta
{  private $id_farmaco;
   private $id_receta;
   private $cantidad;
   private $subtotal;
   

   
   public function __construct(){}
   
   public function DetalleReceta($id_farmaco,$id_receta,$cantidad,$subtotal)
   { $this->id_farmaco=$id_farmaco;
     $this->id_receta=$id_receta;
	 $this->cantidad=$cantidad;
	 $this->subtotal=$subtotal;
	 
	
	   
   }

   public function getId_farmaco()                  {return $this->id_farmaco;} 
   public function getId_receta()                   {return $this->id_receta;}
   public function getCantidad()                    {return $this->cantidad;}
   public function getSubtotal()      	            {return $this->subtotal;}

 
   
   
  
   public function setId_farmaco($id_farmaco)              {$this->id_farmaco=$id_farmaco;}
   public function setId_receta($id_receta)                {$this->id_receta=$id_receta;}
   public function setCantidad($cantidad)                  {$this->cantidad=$cantidad;}
   public function setSubtotal($subtotal)                  {$this->subtotal=$subtotal;}
  
   
  
  

  
   public function ingresarDetalleReceta()
      { $objConex=new Conexion();
        $sql="INSERT INTO DETALLE_RECETA VALUES('".$this->id_farmaco."','".$this->id_receta."','".$this->cantidad."','".$this->subtotal."')";
        $resul=$objConex->generarTransaccion($sql);
        return $resul; 
	 
	  }
   
  
public function modificaDetalleReceta()
   { $objConex=new Conexion();
     $sql="UPDATE DETALLE_RECETA SET ID_FARMACO='".$this->id_farmaco."',PRECIO_FARMACO='".$this->cantidad."',UNIDAD='".$this->subtotal."' WHERE(ID_RECETA=".$this->id_receta.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   } 
   
public function eliminarDetalleReceta()
   { $objConex=new Conexion();
     $sql="DELETE FROM DETALLE_RECETA WHERE(ID_RECETA='".$this->id_receta."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   }
   
public function buscarDetalleReceta()
   { $objConex=new Conexion();
     $sql="SELECT * FROM DETALLE_RECETA WHERE(ID_RECETA='".$this->id_receta."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;   
   }

public function listarDetalleReceta()
   { $objConex=new Conexion();
     $sql="SELECT * FROM DETALLE_RECETA";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;   
   } 
   



}
?>
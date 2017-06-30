<?php
require_once("../Datos/Conexion.php");

class Receta
{  private $id_reseta;
   private $fecha_emision;
   private $total_receta;
   private $estado;
   private $id_usuarios;
 
   
   public function __construct(){}
   
   public function Receta($id_reseta,$fecha_emision,$total_receta,$estado,$id_usuarios)
   { $this->id_reseta=$id_reseta;
     $this->fecha_emision=$fecha_emision;
	 $this->total_receta=$total_receta;
	 $this->estado=$estado;
	 $this->id_usuarios=$id_usuarios;
	
	   
   }
   
   public function getId_reseta()                 {return $this->id_reseta;} 
   public function getFecha_emision()             {return $this->fecha_emision;}
   public function getTotal_receta()              {return $this->total_receta;}
   public function getEstado()      	          {return $this->estado;}
   public function getId_usuarios()      	      {return $this->id_usuarios;}
  
   

   public function setId_reseta($id_reseta)               {$this->id_reseta=$id_reseta;}
   public function setFecha_emision($fecha_emision)       {$this->fecha_emision=$fecha_emision;}
   public function setTotal_receta($total_receta)         {$this->total_receta=$total_receta;}
   public function setEstado($estado)                     {$this->estado=$estado;}
   public function setId_usuarios($id_usuarios)           {$this->id_usuarios=$id_usuarios;}
  
   
  
  


   
   public function ingresarReceta()
      { $objConex=new Conexion();
        $sql="INSERT INTO RECETA VALUES('".$this->id_reseta."','".$this->fecha_emision."','".$this->total_receta."','".$this->estado."','".$this->id_usuarios."')";
        $resul=$objConex->generarTransaccion($sql);
   return $resul; 
	 
	  }
   
  
public function modificarReceta()
   { $objConex=new Conexion();
     $sql="UPDATE RECETA SET FECHA_EMISION='".$this->fecha_emision."',TOTAL_RECETA='".$this->total_receta."',ESTADO='".$this->estado."'  WHERE(ID_RESETA=".$this->id_reseta.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   } 
   
public function eliminarReceta()
   { $objConex=new Conexion();
     $sql="DELETE FROM RECETA WHERE(ID_RESETA='".$this->id_reseta."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   }
   
public function buscarReceta()
   { $objConex=new Conexion();
     $sql="SELECT * FROM RECETA WHERE(ID_RESETA='".$this->id_reseta."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;   
   }

public function listarReceta()
   { $objConex=new Conexion();
     $sql="SELECT * FROM RECETA";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;   
   } 
   



}
?>
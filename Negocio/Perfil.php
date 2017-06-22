<?php
require_once("../Datos/Conexion.php");

class Perfil
{  private $id_perfil;
   private $descripcion_perfil;
   
   public function __construct(){}
   
   public function Perfil($id_perfil,$descripcion_perfil)
   { $this->id_perfil=$id_perfil;
     $this->descripcion_perfil=$descripcion_perfil;
	
	   
   }

   public function getId_perfil()                {return $this->id_perfil;} 
   public function getDescripcion_perfil()       {return $this->descripcion_perfil;}
  
   
   
   
   
   public function setId_perfil($id_usuario)             {$this->id_perfil=$id_perfil;}
   public function setDescripcion_perfil($login_usuario)       {$this->descripcion_perfil=$descripcion_perfil;}
   
  
  


   public function ingresarPerfil()
      { $objConex=new Conexion();
        $sql="INSERT INTO PERFIL VALUES('".$this->id_perfil."','".$this->descripcion_perfil."')";
        $resul=$objConex->generarTransaccion($sql);
   return $resul; 
	 
	  }
   
  
public function modificarPerfil()
   { $objConex=new Conexion();
     $sql="UPDATE PERFIL SET DESCRIPCION_PERFIL='".$this->descripcion_perfil."'  WHERE(ID_PERFIL=".$this->id_perfil.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   } 
   
public function eliminarPerfil()
   { $objConex=new Conexion();
     $sql="DELETE FROM PERFIL WHERE(ID_PERFIL='".$this->id_perfil."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   }
   
public function buscarPerfil()
   { $objConex=new Conexion();
     $sql="SELECT * FROM PERFIL WHERE(ID_PERFIL='".$this->id_perfil."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;   
   }

public function listarPerfil()
   { $objConex=new Conexion();
     $sql="SELECT * FROM PERFIL";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;   
   } 
   



}
?>
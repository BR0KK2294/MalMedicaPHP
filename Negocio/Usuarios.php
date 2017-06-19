<?php
require_once("../Datos/Conexion.php");

class Usuario
{  private $id_usuario;
   private $login_usuario;
   private $pass_usuario;
   private $nombre_usuario;
   private $apellido_usuario;
   private $correo_usuario;
   private $edad_usuario;
   private $fecha_nacimiento;
   private $id_perfil;
   
   public function __construct(){}
   
   public function Usuario($id_usuario,$login_usuario,$pass_usuario,$nombre_usuario,$apellido_usuario,$correo_usuario,$edad_usuario,$fecha_nacimiento,$id_perfil)
   { $this->id_usuario=$id_usuario;
     $this->login_usuario=$login_usuario;
	 $this->pass_usuario=$pass_usuario;
	 $this->nombre_usuario=$nombre_usuario;
	 $this->apellido_usuario=$apellido_usuario;
	 $this->correo_usuario=$correo_usuario;
	 $this->edad_usuario=$edad_usuario;
	 $this->fecha_nacimiento=$fecha_nacimiento;
	 $this->id_perfil=$id_perfil;
	   
   }
   //ACCESADORES
   public function getId_usuario()                {return $this->id_usuario;} 
   public function getLogin_usuario()             {return $this->login_usuario;}
   public function getPass_usuario()              {return $this->pass_usuario;}
   public function getNombre_usuario()      	  {return $this->nombre_usuario;}
   public function getApellido_usuario()      	  {return $this->apellido_usuario;}
   public function getCorreo_usuario()            {return $this->correo_usuario;}
   public function getEdad_usuario()              {return $this->edad_usuario;}
   public function getFecha_nacimiento()      	  {return $this->fecha_nacimiento;}
   public function getId_perfil()      	          {return $this->id_perfil;}
   
   
   
      //MUTANTES
   public function setId_usuario($id_usuario)             {$this->id_usuario=$id_usuario;}
   public function setLogin_usuario($login_usuario)       {$this->login_usuario=$login_usuario;}
   public function setPass_usuario($pass_usuario)         {$this->pass_usuario=$pass_usuario;}
   public function setNombre_usuario($nombre_usuario)     {$this->nombre_usuario=$nombre_usuario;}
   public function setApellido_usuario($apellido_usuario) {$this->apellido_usuario=$apellido_usuario;}
   public function setCorreo_usuario($correo_usuario)     {$this->correo_usuario=$correo_usuario;}
   public function setEdad_usuario($edad_usuario)         {$this->edad_usuario=$edad_usuario;}
   public function setFecha_nacimiento($fecha_nacimiento) {$this->fecha_nacimiento=$fecha_nacimiento;}
   public function setId_perfil($id_perfil)               {$this->id_perfil=$id_perfil;}
   
  
  

   //CUSTOMIZED O BUSINESS
   
   public function ingresarUsuario()
      { $objConex=new Conexion();
        $sql="INSERT INTO USUARIOS VALUES('".$this->id_usuario."','".$this->login_usuario."','".$this->pass_usuario."','".$this->nombre_usuario."','".$this->apellido_usuario."','".$this->correo_usuario."','".$this->edad_usuario."','".$this->fecha_nacimiento."','".$this->id_perfil."')";
        $resul=$objConex->generarTransaccion($sql);
   return $resul; 
	 
	  }
   
  
public function modificarUsuario()
   { $objConex=new Conexion();
     $sql="UPDATE USUARIOS SET LOGIN_USUARIO='".$this->login_usuario."',PASS_USUARIO='".$this->pass_usuario."',NOMBRE_USUARIO='".$this->nombre_usuario."',APELLIDO_USUARIO='".$this->apellido_usuario."',CORREO_USUARIO='".$this->correo_usuario."',EDAD_USUARIO='".$this->edad_usuario."',FECHA_NACIMIENTO='".$this->fecha_nacimiento."',ID_PERFIL='".$this->id_perfil."'  WHERE(ID_USUARIO=".$this->id_usuario.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   } 
   
public function eliminarUsuario()
   { $objConex=new Conexion();
     $sql="DELETE FROM USUARIOS WHERE(ID_USUARIO='".$this->id_usuario."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;   
   }
   
public function buscarUsuario()
   { $objConex=new Conexion();
     $sql="SELECT * FROM USUARIOS WHERE(ID_USUARIO='".$this->id_usuario."')";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;   
   }

public function listarUsuario()
   { $objConex=new Conexion();
     $sql="SELECT * FROM USUARIOS";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;   
   } 
   



}
?>
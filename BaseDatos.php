<?php

class BaseDatos{   // toda clase esta compuesta de atributos, constructor y metodos

    //atributos (son variables)
    
    public $usuarioBD="root";
    public $passwordBD="";
    
    //constructor: es un metodo una funcion
    
    public function __construct(){} //lleva doble guion __
    
    //metodos
    
    public function conectarBD(){
    
    
    try{
    
        
        $datosBD="mysql:host=localhost;dbname=bd_unicuellos"; //gestor de base de datos, nombre del servidor, nombre de la base de datos DSN datos basicos de la base de datpos
        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD); //Este codigo esta preprogramado  (molde) para crear la conecexion con la base de datos, instanciar clase, "sacar fotocopia", constructor
        return($conexionBD);
  
        

         
    
    }catch(PDOException $error){
    
        echo($error->getMessage());
        
       }
    
    
    }  

    public function agregarDatos($consultaSQL){

        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Preparar consulta
        $insertarDatos=$conexionBD->prepare($consultaSQL);

        //Ejecutar la consulta
        $resultado=$insertarDatos->execute();
    
        //verifico el resultado
        if($resultado){
            echo("Producto agregado");
        }else{
            print_r($insertarDatos->errorInfo());
        }
    
        header("location:formulario2.php");

    }

    

    public function consultarDatos($consultaSQL){

        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Preparar consulta
        $consultarDatos=$conexionBD->prepare($consultaSQL);
    
        //Establecer el método de consulta
        $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);
    
        //Ejecutar la operacion en la BD
        $consultarDatos->execute();
    
        //Retorne los datos consultados
        return($consultarDatos->fetchAll());
        
        header("location:listaProductos.php");
    
    }

    

    public function eliminarDatos($consultaSQL){

    
        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Peparar Consulta
        $eliminarDatos=$conexionBD->prepare($consultaSQL);
    
        //Ejecutar la consulta
        $resultado= $eliminarDatos->execute();
    
        //verifico el resultado
        if($resultado){
            echo("Producto Eliminado");
        }else{
            echo("error");
        }
        
        header("location:listaProductos.php");

    }

    

    public function editarDatos($consultaSQL){

        //establecer una conexion
        $conexionBD=$this->conectarBD();
   
        //Peparar Consulta
        $editarDatos=$conexionBD->prepare($consultaSQL);
   
        //Ejecutar la consulta
        $resultado= $editarDatos->execute();
   
        //verifico el resultado
        if($resultado){
            echo("Producto Editado");
        }else{
            echo("error");
        }

        header("location:listaProductos.php");
   
   }

   
}
?>
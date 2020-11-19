<?php // esto corresponde al servidor y no lleva interfaz grafica

include("BaseDatos.php"); // hay que hacer un include para poder que traiga la base de datos, archivo BasesDatos.php

if(isset($_POST["Registrar"])){  //revisa que halllan dado clic en el boton envio, traemos el nombre que tenga name en el buton

    
    //recibir los datos
    $nombre=$_POST['nombre'];  // se reciben los datos que se estan recogiendo del ingreso de datos en el formulario y colocamos lo que en el formulario esta nombrado name
    $color=$_POST['color'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $foto=$_POST['foto'];
    
//Copia u objeto de la clase BD, crear un objeto de la clase BD
    $transaccion=new BaseDatos(); // se genera una variable y le colocamos el nombre de que deseemos en este caso transaccion para generar la conexion despues de recibir los datos
                                   // cuando hacemos esto en la variable transaccion ya tenemos acceso a todos los atributos y metodos de la base de datos
                                   // en esta variable me quedaron todos los atributos y metodos de la clase BaseDatos (se le saco fotocopia)                             
    //crear consulta
    $consultaSQL="INSERT INTO productos(Nombre,Color,Precio,Descripcion,Foto) VALUES ('$nombre','$color','$precio','$descripcion','$foto')";

    //llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL); //$transaccion la reemplace por $insertarDatos

    //redireccion
    header("location:formulario2.php");
    

}
?>

<?php 

include("BaseDatos.php");

//1. Crear el objeto de la BD
$transaccion=new BaseDatos();


//2. RECIBIR DATOS
if(isset($_POST["botonEditar"])){

        
//3. Recibir el id que quiero editar
    $id=$_GET["id"];
    $nombre=$_POST['nombreEditar'];
    $precio=$_POST['precioEditar'];
    $descripcion=$_POST['descEditar'];

//4.consulta para editar un registro
$consultaSQL="UPDATE productos SET Nombre='$nombre',Precio='$precio',Descripcion='$descripcion' WHERE idProducto='$id'";   
   
//5.Utilizar el metodo editar
$transaccion->editarDatos($consultaSQL);

}    
?>    
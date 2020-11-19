<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
<form action="registrarProductos.php" method="POST">
  <section class="form-register">
    <h4>Administracion de Productos</h4>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre:"> 
    <input class="controls" type="text" name="color" id="color" placeholder="Color:">
    <input class="controls" type="text" name="precio" id="precio" placeholder="Precio:">
    <input class="controls" type="text" name="descripcion" id="descripcion" placeholder="Descripción:">
    <input class="controls" type="text" name="foto" id="foto" placeholder="URL Fotografia:">
    <input class="botons" type="submit" value="Registrar" name="Registrar">
  </section>
  </form>
</body>
</html>
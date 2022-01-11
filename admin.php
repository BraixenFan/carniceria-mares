<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/adminstyles.css" />
  <title>Admin</title>
</head>
<body>
  <div class="container">
    <div class="simple-form">
      <h1>CREAR NUEVA ENTRADA</h1>
      <form>
        <div>
          <label for="Nombre">Nombre</label>
          <input id="Nombre" type="text" placeholder="Nombre de la entrada" name="Nombre" required />
        </div>
        <div class="message-box">
          <label for="Detalles">Detalles</label>
          <textarea id="Detalles" type="text" rows="5" placeholder="Carne X cortada en Y" name="Detalles" required></textarea>
        </div>
        <div>
          <label for="Precio">Precio</label>
          <input id="Precio" type="text" placeholder="$100/kg" name="Precio" required />
        </div>
        <div>
          <label for="Disponibilidad">Disponibilidad</label>
          <select id="Disponibilidad" name="Disponibilidad" required>
            <option value="">Escoge una opcion</option>
            <option value="Disponible">Disponible</option>
            <option value="Pocas">Pocas existencias</option>
            <option value="Agotado">Agotado</option>
          </select>
        </div>
        <div>
        <label for="fotoCarne">Imagen</label>
        <input type="file" id="fotoCarne" name="fotoCarne"/>
        </div>
        <button class="submit-btn">Crear</button>
      </form>
</body>
</html>


<?php
//phpinfo();
//  
//// data strored in an array called cars
//$cars = Array (
//    "0" => Array (
//        "id" => "01",
//        "name" => "BMW",
//    ),
//    "1" => Array (
//        "id" => "02",
//        "name" => "Volvo",
//    ),
//    "3" => Array (
//        "id" => "04",
//        "name" => "Topaz",
//    )
//);
//// encode array to json
//$json = json_encode($cars);
//$bytes = file_put_contents("myfile.json", $json);
//echo "Here is the myfile data $bytes.";
?>
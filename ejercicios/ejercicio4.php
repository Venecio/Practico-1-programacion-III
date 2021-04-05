<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilos/estilocorto.css">
        <title></title>
    </head>
    <body>
    	<h1>Ejercicio N° 4</h1>
        <form method="POST" action ="">
            <label class="label_ej">Nota 1</label>
            <input type="number" name="numero"><br>
            <label class="label_ej">Nota 2</label>
            <input type="number" name="numero2"><br>
            <label class="label_ej">Nota 3</label>
            <input type="number" name="numero3"><br>
            <label class="label_ej">Nota 4</label>
            <input type="number" name="numero4"><br>

            <input class="botonenviar" type="submit" name="guardar" value="Calcular"> 


        </form>

    </body>
</html>



<?php
$promedio = 0;
if (isset($_POST['guardar'])) {
    $numero = $_POST['numero'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numero4 = $_POST['numero4'];

    $suma = $numero + $numero2 + $numero3 + $numero4;
    $promedio = $suma / 4;
    ?><div class ="texto"><?php echo "La suma de las notas es: ", $suma ?></div><?php
    ?><div class ="texto"><?php echo "El promedio: ", $promedio;?></div><?php
}

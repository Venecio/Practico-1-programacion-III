<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="estilos/estilocorto.css"/>
        <title></title>
    </head>
    <body>
        <h1>Ejercicio N° 6</h1>
        <form method="POST" action ="">
            <label class="label_ej">Cateto N° 1</label>
            <input type="number" name="cateto1"><br>
            <label class="label_ej">Cateto N° 2</label>
            <input type="number" name="cateto2"><br>

            <input class="botonenviar"type="submit" name="guardar" value="Calcular"> 


        </form>

    </body>
</html>


<?php
$sumacatetos = 0;
$raiz = 0;
$exponente = 2;
if (isset($_POST['guardar'])) {
    $cateto1 = $_POST['cateto1'];
    $cateto2 = $_POST['cateto2'];

    $sumacatetos = pow($cateto1, $exponente) + pow($cateto2, $exponente);
    $raiz = sqrt($sumacatetos);
    ?><div class ="texto"><?php echo "Cateto Nª 1 = ", $cateto1 ?></div><?php
    ?><div class ="texto"><?php echo "Cateto Nª 2 = ", $cateto2 ?></div><?php
    ?><div class ="texto"><?php echo "La suma de los catetos al cuadrado es: ", $sumacatetos ?></div><?php
    ?><div class ="texto"><?php echo "El valor de la hipotenusa: ", $raiz ?></div><?php
    if (isset($_POST['ver'])) {
        echo "Resoluciòn: <br>" . "h2 = Ca² + co²" . "<br>" . "h2 = ", $cateto1 . " ² " . "  +  " . $cateto2 . " ² " . "<br>";
        echo "h= ";
    }
}
    
    

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilos/estiloformulario.css">
        <title>Ejercicios</title>
    </head>
    <body>
        <h1>Ejercicio</h1>

        <form method="POST" action ="">
            <label class="colortexto">Ingrese numero</label>
            <input type="number" step="any" name="numero"><br>
            <input class="botonenviar" type="submit" name="guardar" value="Enviar">

            <a class="botonvolver" href="index.php">Volver</a>


        </form>
    </body>
</html>

<?php
$numero = 0;
if (isset($_POST['guardar'])) {
    $numero = $_POST['numero'];
}

class operaciones {

    public function Gauss($numero) {
        $sum = $numero * ($numero + 1) / 2;
        echo "<div class='texto'>Sumatoria = $sum</div>";
    }

    public function propiedadescirculo($numero) {
        $diametro = 2 * $numero;
        $circunsferencia = pi() * $diametro;
        $superficie = (pi() * $numero) * $numero;
        ?><div class ="texto"><?php echo "Radio = $numero" ?></div><?php
        ?><div class ="texto"><?php echo "Diametro = $diametro" ?></div><?php
        ?><div class ="texto"><?php echo "Circunsferencia = " . number_format($circunsferencia, 3) ?></div><?php
        ?><div class ="texto"><?php echo "Superficie = " . number_format($superficie, 3) ?></div><?php
    }

    public function centimetroapulgada($numero) {
        ?><div class ="texto"><?php echo "$numero cm son ", ($numero / 2.54) . " Pulgadas" ?></div><?php
        }

        public function convertiraentero($numero) {
            $valor = intval($numero);
    ?><div class ="texto"><?php echo "Parte entera: ", $valor ?></div><?php ?><div class ="texto"><?php echo "Parte decimal: ", $numero - $valor ?></div><?php
    }

    public function convertirhoras($numero) {
        $minutos = $numero * 60;
        $segundos = $numero * 3600;
        if (isset($_POST['guardar'])) {
            ?><div class ="texto"><?php echo $numero . " horas son: ", $minutos . " minutos" . "<br>" . " y ", $segundos . " segundos" ?></div><?php
        }
    }

}

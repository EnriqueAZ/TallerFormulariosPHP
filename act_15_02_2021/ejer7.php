<?php
$textarea1 = $_POST["textarea1"];
$traducir = $_POST["traducir"];

$cadena_buscada   = '-';
$posicion_coincidencia = strrpos($$textarea1, $cadena_buscada);

if ($traducir == "texto" && $posicion_coincidencia === false) {
    for ($i=0; $i < strlen($textarea1); $i++) { 

        $rest = substr($textarea1, $i, 1);

        
    }
    texto($textarea1);
}

if ($traducir == "morse" && $posicion_coincidencia !== false) {
    morse($textarea1);
}


function texto($textarea1){
    $texto = array(
        ".-" => "a",
        "-..." => "b",
        "-.-." => "c",
        "-.." => "d",
        "." => "e",
        "..-." => "f",
        "--." => "g",
        "...." => "h",
        ".." => "i",
        ".---" => "j",
        "-.-" => "k",
        ".-.." => "l",
        "--" => "m",
        "-." => "n",
        "--.--" => "ñ",
        "---" => "o",
        ".--." => "p",
        "--.-" => "q",
        ".-." => "r",
        "..." => "s",
        "-" => "t",
        "..-" => "u",
        "...-" => "v",
        ".--" => "w",
        "-..-" => "x",
        "-.--" => "y",
        "--.." => "z",
        "-----" => "0",
        ".----" => "1",
        "..---" => "2",
        "...--" => "3",
        "....-" => "4",
        "....." => "5",
        "-...." => "6",
        "--..." => "7",
        "---.." => "8",
        "----." => "9",
        "--..--" => ",",
        ".-.-.-" => ".",
        ".-.-." => "+",
        "..--.." => "?"
    );


}


function morse($textarea1){
    $texto = array(
        ".-" => "a",
        "-..." => "b",
        "-.-." => "c",
        "-.." => "d",
        "." => "e",
        "..-." => "f",
        "--." => "g",
        "...." => "h",
        ".." => "i",
        ".---" => "j",
        "-.-" => "k",
        ".-.." => "l",
        "--" => "m",
        "-." => "n",
        "--.--" => "ñ",
        "---" => "o",
        ".--." => "p",
        "--.-" => "q",
        ".-." => "r",
        "..." => "s",
        "-" => "t",
        "..-" => "u",
        "...-" => "v",
        ".--" => "w",
        "-..-" => "x",
        "-.--" => "y",
        "--.." => "z",
        "-----" => "0",
        ".----" => "1",
        "..---" => "2",
        "...--" => "3",
        "....-" => "4",
        "....." => "5",
        "-...." => "6",
        "--..." => "7",
        "---.." => "8",
        "----." => "9",
        "--..--" => ",",
        ".-.-.-" => ".",
        ".-.-." => "+",
        "..--.." => "?"
    );
}


$ciudadDestino = "";
$ciudadOrigen = "";
$alimentacion = "";
$internet = "";
$maletero = "";
$clase = "";

$pelicula = "";
$accesorios = "";
$total = 0;

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='ejercicios.css'>

    <title>Act 15/02/2021</title>
</head>

<body>
    <header>
        <div>
            <h1>Actividad 15/02/2021</h1>
        </div>
    </header>
    <section>
        <div id="divss" style="text-align: left;">
            <p>8. AEROLINEAS MANIZALES
                La empresa de transporte aéreo “Aerolíneas Manizales” ha establecido la siguiente tabla de tarifas para los destinos.
                • Manizales – Neiva y viceversa $ 347.000 • Manizales – Pereira y viceversa $ 360.000 • Manizales – Pasto y viceversa $ 382.000 • Neiva – Pereira y viceversa $ 375.000 • Neiva – Pasto y viceversa $ 392.000 • Pereira – Pasto y viceversa $ 408.000
                Nota. Estas tarifas aplican para clase turista. En primera clase, se le debe incrementar el 20% a la tarifa. En clase ejecutiva, se le debe incrementar el 50% a la tarifa. Como están de aniversario, han establecido una promoción para los clientes, la cual consiste en lo siguiente. Si la edad del pasajero es mayor a 30 años tendrá un 10% de descuento. En caso contrario tendrá un 15% de descuento. Adicional a esto, la aerolínea ofrece los siguientes servicios a módicos precios. Alimentación. $25000. Internet. $ 5000. Maletero. $ 4000 Se debe crear la siguiente interfaz, y en las listas de las ciudades se mostraran las siguientes tanto en origen como destino.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                            <?php 
                            if ($ciudadOrigenE8 != $ciudadDestinoE8) {
                                
                                switch ($ciudadOrigenE8 && $ciudadDestinoE8) {
                                    case (($ciudadOrigenE8 == "manizales" && $ciudadDestinoE8 == "neiva") || ($ciudadOrigenE8 == "neiva" && $ciudadDestinoE8 == "manizales")):
                                
                                        $total = 347000;
                                        
                                        if ($ciudadOrigenE8 == "manizales") {
                                            $ciudadDestino = "Neiva";
                                            $ciudadOrigen = "Manizales";    
                                        }else {
                                            $ciudadDestino = "Manizales";
                                            $ciudadOrigen = "Neiva";    
                                        }
                                        
                                
                                        break;
                                
                                    case (($ciudadOrigenE8 == "manizales" && $ciudadDestinoE8 == "pereira") || ($ciudadOrigenE8 == "pereira" && $ciudadDestinoE8 == "manizales")):
                                
                                        $total = 360000;
                                        
                                        if ($ciudadOrigenE8 == "manizales") {
                                            $ciudadDestino = "Pereira";
                                            $ciudadOrigen = "Manizales";    
                                        }else {
                                            $ciudadDestino = "Manizales";
                                            $ciudadOrigen = "Pereira";    
                                        }
                                
                                        break;
                                    
                                    case (($ciudadOrigenE8 == "manizales" && $ciudadDestinoE8 == "pasto") || ($ciudadOrigenE8 == "pasto" && $ciudadDestinoE8 == "manizales")):
                                
                                        $total = 382000;
                                        
                                        if ($ciudadOrigenE8 == "manizales") {
                                            $ciudadDestino = "Pasto";
                                            $ciudadOrigen = "Manizales";    
                                        }else {
                                            $ciudadDestino = "Manizales";
                                            $ciudadOrigen = "Pasto";    
                                        }
                                
                                        break;
                                
                                    case (($ciudadOrigenE8 == "neiva" && $ciudadDestinoE8 == "pereira") || ($ciudadOrigenE8 == "pereira" && $ciudadDestinoE8 == "pasto")):
                                
                                        $total = 375000;
                                        
                                        if ($ciudadOrigenE8 == "neiva") {
                                            $ciudadDestino = "Pereira";
                                            $ciudadOrigen = "Neiva";    
                                        }else {
                                            $ciudadDestino = "Neiva";
                                            $ciudadOrigen = "Pereira";    
                                        }
                                
                                        break;
                                    
                                    case (($ciudadOrigenE8 == "neiva" && $ciudadDestinoE8 == "pasto") || ($ciudadOrigenE8 == "pasto" && $ciudadDestinoE8 == "neiva")):
                                
                                        $total = 392000;
                                        
                                        if ($ciudadOrigenE8 == "neiva") {
                                            $ciudadDestino = "Pasto";
                                            $ciudadOrigen = "Neiva";    
                                        }else {
                                            $ciudadDestino = "Neiva";
                                            $ciudadOrigen = "Pasto";    
                                        }
                                
                                        break;
                                    
                                    case (($ciudadOrigenE8 == "pereira" && $ciudadDestinoE8 == "pasto") || ($ciudadOrigenE8 == "pasto" && $ciudadDestinoE8 == "pereira")):
                                
                                        $total = 408000;
                                        
                                        if ($ciudadOrigenE8 == "pereira") {
                                            $ciudadDestino = "Pasto";
                                            $ciudadOrigen = "Pereira";    
                                        }else {
                                            $ciudadDestino = "Pereira";
                                            $ciudadOrigen = "Pasto";    
                                        }
                                
                                        break;
                                    
                                    
                                    default:
                                    
                                        
                                
                                        break;
                                }


                                if ($claseE8 == "primeraClase") {
                                    $total = $total * 1.2;
                                    $clase = "PrimeraClase";
                                }elseif ($claseE8 == "ejecutiva") {
                                    $total = $total * 1.5;
                                    $clase = "Ejecutiva";
                                }

                                if ($edadE8 > 30) {
                                    $total = $total * (1 - 0.1);
                                }else {
                                    $total = $total * (1 - 0.15);
                                }

                                if (isset($_POST["alimentacionE8"])) {
                                    $total += 25000;

                                    $alimentacion = "Alimentación";
                                    
                                    
                                }
                                if (isset($_POST["internetE8"])) {
                                    $total += 5000;

                                    $internet = "Internet";
                                    
                                }
                                if (isset($_POST["maleteroE8"])) {
                                    $total += 4000;

                                    $maletero = "Maletero";
                                    
                                }
                                
                            ?>
                            <tr>
                                <td>Nombre: </td>    
                                <td><?= $nombreE8 ?></td>
                            </tr>
                            <tr>
                                <td>Edad: </td>    
                                <td><?= $edadE8 ?></td>
                            </tr>
                            <tr>
                                <td>Ciudad de origen: </td>    
                                <td><?= $ciudadOrigen ?></td>
                            </tr>
                            <tr>
                                <td>Ciudad de destino: </td>    
                                <td><?= $ciudadDestino ?></td>
                            </tr>
                            <tr>
                                <td>Servicios: </td>    
                                <td><?= $accesorios ?></td>
                            </tr>
                            <tr>
                                <td>Servicios: </td>    
                                
                                <td><?php echo $alimentacion, "<br>" , $internet , "<br>" , $maletero , "<br>" , $pelicula , "<br>"; ?></td>
                            </tr>
                            <tr>
                                <td>Total a pagar: </td>
                                <td><?php echo  $total; ?></td>
                            </tr>
                            <?php }else {
                            ?>

                            <tr>
                                <td>Nombre: </td>    
                                <td><?php echo  "Ha ingresado la misma ciudad dos veces" ;?></td>
                            </tr>

                            <?php } ?>

                        </table>
                        <a href="act_15_02_2021.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Volver</a>
                    </form>
                </fieldset>
            </div>
        </div>
    </section>
    <footer>
        Carlos Enrique Álape Hernández
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
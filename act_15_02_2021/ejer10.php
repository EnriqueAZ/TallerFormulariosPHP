<?php
$modeloE10 = $_POST["modeloE10"];
$versionE10 = $_POST["versionE10"];
$sexoE10 = $_POST["sexoE10"];
$nombreE10 = $_POST["nombreE10"];
$edadE10 = $_POST["edadE10"];



$modelo = "";
$version = "";
$sexo = "";
$total = 0;
$vidrios = "";
$bloqueo = "";
$alarma = "";
$pelicula = "";
$accesorios = "";


switch ($modeloE10 && $versionE10) {
    case ($modeloE10 == "twingo" && $versionE10 == "basico"):

        $total = 21990000;
        $modelo = "Twingo";
        $version = "Básico";

        break;

    case ($modeloE10 == "twingo" && $versionE10 == "aire"):

        $total = 23990000;
        $modelo = "Twingo";
        $version = "Aire";

        break;
    
    case ($modeloE10 == "sandero" && $versionE10 == "basico"):

        $total = 25490000;
        $modelo = "Sandero";
        $version = "Básico";

        break;

    case ($modeloE10 == "sandero" && $versionE10 == "aire"):

        $total = 27490000;
        $modelo = "Sandero";
        $version = "Aire";

        break;
    
    case ($modeloE10 == "koleos" && $versionE10 == "basico"):

        $total = 59990000;
        $modelo = "Koleos";
        $version = "Básico";

        break;
    
    case ($modeloE10 == "koleos" && $versionE10 == "aire"):

        $total = 64490000;
        $modelo = "Koleos";
        $version = "Aire";

        break;

    case ($modeloE10 == "logan" && $versionE10 == "basico"):

        $total = 23490000;
        $modelo = "Logan";
        $version = "Básico";

        break;

    case ($modeloE10 == "logan" && $versionE10 == "aire"):

        $total = 25490000;
        $modelo = "Logan";
        $version = "Aire";

        break;
    
    
    default:
    
        

        break;
}


if ($sexoE10 == "mujer") {
    $total = $total * (1 - 0.05);
    $sexo = "Mujer";
}else {
    $sexo = "Hombre";
}

// if ($modeloE10 == "twingo" && $versionE10 == "basico") {
//     $total = 21990000;
//     $modelo = "Twingo";
//     $version = "Básico";
// }elseif ($modeloE10 == "twingo" && $versionE10 == "aire") {
//     $total = 23990000;
//     $modelo = "Twingo";
//     $version = "Aire";
// }elseif ($modeloE10 == "sandero" && $versionE10 == "basico") {
//     $total = 25490000;
//     $modelo = "Sandero";
//     $version = "Básico";
// }elseif ($modeloE10 == "sandero" && $versionE10 == "aire") {
//     $total = 27490000;
//     $modelo = "Sandero";
//     $version = "Aire";
// }elseif ($modeloE10 == "koleos" && $versionE10 == "basico") {
//     $total = 59990000;
//     $modelo = "Koleos";
//     $version = "Básico";
// }elseif ($modeloE10 == "koleos" && $versionE10 == "aire") {
//     $total = 64490000;
//     $modelo = "Koleos";
//     $version = "Aire";
// }elseif ($modeloE10 == "logan" && $versionE10 == "basico") {
//     $total = 23490000;
//     $modelo = "Logan";
//     $version = "Básico";
// }elseif ($modeloE10 == "logan" && $versionE10 == "aire") {
//     $total = 25490000;
//     $modelo = "Logan";
//     $version = "Aire";
// }





if (isset($_POST["vidriosE10"])) {
    $total += 200000;
    $vidrios = "Vidrios eléctricos";
    
}
if (isset($_POST["bloqueoE10"])) {
    $total += 45000;
    $bloqueo = "Bloqueo central";
    
}
if (isset($_POST["alarmaE10"])) {
    $total += 130000;
    $bloqueo = "Alarma";
    
}
if (isset($_POST["peliculaE10"])) {
    $total += 60000;
    $pelicula = "Pelicula de seguridad";
    
}


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
            <p>9. El concesionario de vehículos “Tu Renault”, desea que le desarrollen una aplicación para, la cual le permitirá a sus clientes conocer los valores de los vehículos que tienen a la venta. Este mes han decidido hacerle un homenaje a la mujer. Dicho homenaje consiste en que si el cliente es mujer, obtendrá un 5% de descuento sobre el precio del vehículo.
              Adicional a esto, el concesionario ofrece la venta e instalación de accesorios a los vehículos tal como aparece en la tabla accesorios.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                            <tr>
                                <td>Nombre: </td>    
                                <td><?= $nombreE10 ?></td>
                            </tr>
                            <tr>
                                <td>Edad: </td>    
                                <td><?= $edadE10 ?></td>
                            </tr>
                            <tr>
                                <td>Sexo: </td>    
                                <td><?= $sexo ?></td>
                            </tr>
                            <tr>
                                <td>Modelo: </td>    
                                <td><?= $modelo ?></td>
                            </tr>
                            <tr>
                                <td>Versión: </td>    
                                <td><?= $version ?></td>
                            </tr>
                            <tr>
                                <td>Accesorios: </td>    
                                <td><?php echo $vidrios, "<br>" , $bloqueo , "<br>" , $alarma , "<br>" , $pelicula , "<br>"; ?></td>
                            </tr>
                            <tr>
                                <td>Total a pagar: </td>
                                <td><?php echo  $total; ?></td>
                            </tr>
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
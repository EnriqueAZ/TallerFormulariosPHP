<?php
$tamanoE9 = $_POST["tamanoE9"];
$saborE9 = $_POST["saborE9"];
$gaseosaE9 = $_POST["gaseosaE9"];
$nombreE9 = $_POST["nombreE9"];
$direccionE9 = $_POST["direccionE9"];
$comentariosE9 = $_POST["comentariosE9"];


$tamano = "";
$sabor = "";
$bordeQueso = "";
$aceitunas = "";
$peperoni = "";
$maizTierno = "";
$jalapeno = "";
$gaseosa = "No";
$total = 0;


if ($tamanoE9 == "grande") {
    $total = 20000;
    $tamano = "Grande";
}elseif ($tamanoE9 == "mediano") {
    $total = 12000;
    $tamano = "Mediano";
}elseif ($tamanoE9 == "personal") {
    $total = 6000;
    $tamano = "Personal";
}

if ($saborE9 = "hawayana") {
    $sabor = "Hawayana";
}elseif ($saborE9 = "carner") {
    $sabor = "Carnes";
}elseif ($saborE9 = "pollo") {
    $sabor = "Pollo";
}

if (isset($_POST["bordeQuesoE9"])) {
    $total += 1300;
    $bordeQueso = "Borde de queso";
}
if (isset($_POST["aceitunasE9"])) {
    $total += 1500;
    $aceitunas = "Aceitunas";
}
if (isset($_POST["peperoniE9"])) {
    $total += 1000;
    $peperoni = "Peperoni";
}
if (isset($_POST["maizTiernoE9"])) {
    $total += 800;
    $maizTierno = "Maiz tierno";
}
if (isset($_POST["jalapenoE9"])) {
    $total += 700;
    $jalapeno = "Jalapeño";
}

if ($gaseosaE9 == "si") {
    $total += 4000;
    $gaseosa = "Sí";
}else {
    $gaseosa = "No";
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
            <p>9. La pizzeria saboreo desea crear el servicio de domicilios online, para ello lo contrata a usted para que le desarrolle el sitio web. La propuesta es que este tenga la siguiente interfaz gráfica.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                            <tr>
                                <td>Tamaño: </td>    
                                <td><?= $tamano ?></td>
                            </tr>
                            <tr>
                                <td>Sabor: </td>    
                                <td><?= $sabor ?></td>
                            </tr>
                            <tr>
                                <td>Adicionales: </td>    
                                <td><?php echo $bordeQueso , "<br>" , $aceitunas , "<br>" , $peperoni , "<br>"  , $maizTierno , "<br>" , $jalapeno; ?></td>
                            </tr>
                            <tr>
                                <td>Gaseosa: </td>    
                                <td><?php echo $gaseosa; ?></td>
                            </tr>
                            <tr>
                                <td>Nombre: </td>    
                                <td><?php echo $nombreE9; ?></td>
                            </tr>
                            <tr>
                                <td>Dirección: </td>    
                                <td><?php echo $direccionE9; ?></td>
                            </tr>
                            <tr>
                                <td>Comentarios: </td>    
                                <td><?php echo $comentariosE9; ?></td>
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
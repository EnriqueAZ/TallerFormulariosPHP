<?php
$par1E5 = 0;
$par2E5 = 0;
$par3E5 = 0;    

if (isset($_POST["par1E5"]) && $_POST["par1E5"] != "" ) {
    $par1E5 = $_POST["par1E5"];
}

if (isset($_POST["par2E5"]) && $_POST["par2E5"] != "") {
    $par2E5 = $_POST["par2E5"];
}

if (isset($_POST["par3E5"]) && $_POST["par3E5"] != "") {
    $par3E5 = $_POST["par3E5"];
}


$calcular = 0;


if ($par1E5 != "") {
    $calcular = $par1E5;
    $par3E5 = 0;
    $par2E5 = 0;
}elseif ($par2E5 != "") {
    $calcular = $par2E5 * 2;
    $par1E5 = 0;
    $par3E5 = 0;
}elseif ($par3E5 != "") {
    $calcular = $par3E5 * 3;
    $par1E5 = 0;
    $par2E5 = 0;
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
            <p>6. En un almacén de zapatos se planea ofrecer a los clientes un descuento que dependerá del número de zapatos que compre. Si compra un par no hay descuento, Si se compran dos pares de zapatos, el par de mayor valor se paga completo y el par de menor valor queda a la mitad del precio. Si compra 3 pares, los dos pares de mayor valor se pagan completos y el tercero le sale gratis. Crear un formulario que solicite la cantidad de zapatos a comprar, el precio de cada par y un script que calcule y muestre el total a pagar por la compra.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                            <tr>
                                <td>Un par: </td>    
                                <td><?php echo $par1E5 ; ?></td>
                            </tr>
                            <tr>
                                <td>Dos pares: </td>    
                                <td><?php echo $par2E5 ; ?></td>
                            </tr>
                            <tr>
                                <td>Tres pares: </td>    
                                <td><?php echo $par3E5 ; ?></td>
                            </tr>
                            <tr>
                                <td>Total a pagar: </td>
                                <td><?php echo  $calcular ; ?></td>
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
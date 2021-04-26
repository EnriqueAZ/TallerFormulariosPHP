<?php
$nombreVendedorE2 = $_POST["nombreVendedorE2"];
$celularesVendidosE2 = $_POST["celularesVendidosE2"];
$valorVentasE2 = $_POST["valorVentasE2"];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
            <p>2. Una compañía de venta de celulares paga a su personal de ventas un salario básico de $300000 mensuales más una comisión de $10000 por cada celular vendido, más el 5% del valor de la venta. Cada mes el contador de la empresa ingresa el nombre del vendedor, el número de celulares vendidos y el valor total de las ventas de celulares en el mes. Realice un formulario que dados los datos ingresados por el contador calcule y muestre en un script el nombre del empleado y el salario total del empleado en el mes.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                          <?php if ($nombreVendedorE2 != "" && $celularesVendidosE2 != "" && $valorVentasE2 != "") {
                                  $comision = $celularesVendidosE2 * 10000;
                                  $valorVentas = $valorVentasE2 * 0.05; 
                            ?>
                            <tr>
                                <td>Nombre del vendedor: </td>
                                <td><?= $nombreVendedorE2 ?></td>
                            </tr>
                            <tr>
                                <td>Comisión por celular vendido: </td>
                                <td><?= $comision ?></td>
                            </tr>
                            <tr>
                                <td>Valor por las ventas: </td>
                                <td><?= $valorVentas ?></td>
                            </tr>
                            <tr>
                                <td>Salario total: </td>
                                <td><?php echo  300000 + $comision + $valorVentas; ?></td>
                            </tr>
                            <?php  } ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
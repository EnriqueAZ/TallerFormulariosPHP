<?php
$salarioMensual = $_POST["salarioE1"];
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
            <p>1. Un contratista firma un contrato de prestación de servicios para una empresa, el cual tiene un salario mensual. Al contratista se le descuenta el 10% del valor del salario mensual por concepto de retención en la fuente. Adicional a eso, el contratista debe realizar sus aportes a salud y pensión, sobre una base de cotización. La base de cotización corresponde al 40% del salario mensual. Los aportes a salud corresponden al 12.5% sobre la base de cotización y los aportes a pensiones corresponden a un 16% sobre la base de cotización. Realizar formulario que solicite el salario mensual un script que muestre el valor descontado por retención en la fuente, la base de cotización, el valor pagado a salud y el valor pagado a pensiones.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                          <?php if ($salarioMensual != "") { $retencionFuente = $salarioMensual * 0.1;
                                  $baseCotizacion = $salarioMensual * 0.4;
                                  $aportesSalud = $baseCotizacion * 0.125;
                                  $aportesPension = $baseCotizacion * 0.16;?>
                            <tr>
                                <td>Retención de la fuente: </td>
                                <td><?= $retencionFuente ?></td>
                            </tr>
                            <tr>
                                <td>Base de cotización: </td>
                                <td><?= $baseCotizacion ?></td>
                            </tr>
                            <tr>
                                <td>Aportes a salud: </td>
                                <td><?= $aportesSalud ?></td>
                            </tr>
                            <tr>
                                <td>Aportes a pensión: </td>
                                <td><?= $aportesPension ?></td>
                            </tr>
                            <tr>
                                <td>Valor descontado: </td>
                                <td><?php echo $salarioMensual - $retencionFuente - $aportesSalud - $aportesPension; ?></td>
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
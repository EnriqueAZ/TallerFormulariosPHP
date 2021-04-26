<?php
$pesoE4 = $_POST["pesoE4"];
$estaturaE4 = $_POST["estaturaE4"];
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
            <p>4. El índice de masa corporal (IMC) es una medida de asociación entre el peso y la talla de un individuo. Ideado por el estadístico belgaL. A. J. Quetelet, por lo que también se conoce como índice de Quetelet. Desarrollar un formulario que solicite el peso en kilogramos y la longitud en metros de una persona y calcule y muestre en un script el índice de masa corporal y la categoría en la cual se encuentra el individuo en base a la siguiente tabla.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                          <?php if ($pesoE4 != "" && $estaturaE4 != "" ) {
                                  $imc = $pesoE4 / pow($estaturaE4, 2);
                                  $nivel = "";


                                  switch ($imc) {
                                        case ($imc < 18.5):
                                            $nivel = "Por debajo del peso";
                                        break;

                                        case (($imc >= 18.5) && ($imc < 25)):
                                            $nivel = "Saludable";
                                        break;

                                        case (($imc >= 25) && ($imc < 30)):
                                            $nivel = "Con sobrepeso";
                                        break;

                                        case (($imc >= 30) && ($imc < 40)):
                                            $nivel = "Obeso";
                                        break;
                                      
                                      default:
                                            $nivel = "Obesidad mórbida";
                                        break;
                                  }
                            ?>
                            <tr>
                                <td>IMC: </td>
                                <td><?= $imc ?></td>
                            </tr>
                            <tr>
                                <td>Categoría: </td>
                                <td><?= $nivel ?></td>
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
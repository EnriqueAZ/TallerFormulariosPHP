<?php
$nombreCandidatoE3 = $_POST["nombreCandidatoE3"];
$numeroPreguntasE3 = $_POST["numeroPreguntasE3"];
$preguntasCorrectasE3 = $_POST["preguntasCorrectasE3"];
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
            <p>3. Una persona interesada en un empleo, realiza un test de capacitación. En dicho test la empresa obtuvo la siguiente información. Cantidad total de preguntas que se le realizaron y la cantidad de preguntas que contestó correctamente. La empresa le ha solicitado desarrollar un formulario que ingrese el nombre del candidato, la cantidad de preguntas del test y la cantidad de preguntas respondidas correctamente.Y realizar un script el cual deberá mostrar el nombre del candidato, el porcentaje de preguntas acertadas y el nivel en el cual ha quedado. El porcentaje de preguntas correctas se pude calcular de la siguiente forma. % preguntas correctas = (preguntas correctas / total preguntas) * 100 El nivel se calcula de acuerdo al siguiente rango.</p>
            <div class="divs">
                <fieldset>
                    <form>
                        <table class="table">
                          <?php if ($nombreCandidatoE3 != "" && $numeroPreguntasE3 != "" && $preguntasCorrectasE3 != "") {
                                  $porcentaje = $preguntasCorrectasE3 * 100 / $numeroPreguntasE3;
                                  $nivel = "";


                                  switch ($porcentaje) {
                                        case ($porcentaje >= 90):
                                            $nivel = "Nivel máximo";
                                        break;

                                        case (($porcentaje >= 75) && ($porcentaje < 90)):
                                            $nivel = "Nivel medio";
                                        break;

                                        case (($porcentaje >= 50) && ($porcentaje < 75)):
                                            $nivel = "Nivel regular";
                                        break;
                                      
                                      default:
                                            $nivel = "Fuera de nivel";
                                        break;
                                  }
                            ?>
                            <tr>
                                <td>Nombre del candidato: </td>
                                <td><?= $nombreCandidatoE3 ?></td>
                            </tr>
                            <tr>
                                <td>Porcentaje de preguntas correctas: </td>
                                <td><?php echo $porcentaje , "%" ;?></td>
                            </tr>
                            <tr>
                                <td>Nivel en el cual ha quedado: </td>
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
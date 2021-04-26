<?php
    // Isset es para saber si un elemento está seleccionado
    if (isset($_GET["piedra"])) {
        echo "Usted seleccionó piedra";
    }

    if ($_GET["juego"] == 1) {
        echo "Usted seleccionó piedras";
    }
?>
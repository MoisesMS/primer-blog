<?php
    function mostrarErrores($errores, $campo) {
      $alerta = "";

      if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div style='color:red'>$errores[$campo]</div>";
      }

      return $alerta;
    }

    function borrarErrores() {
      $_SESSION["errores"] = null;
      unset($_SESSION["errores"]);
    }
?>
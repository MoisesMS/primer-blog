<?php
  include_once "includes/helpers.php";
?>

<aside id="sidebar">
        <div id="login" class="bloque">
          <h3>Identifícate</h3>
          <form action="login.php" method="post">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" placeholder="Correo electrónico"/>

            <label for="email">Contraseña</label>
            <input type="password" name="pass" id="pass" placeholder="Contraseña"/>

            <input type="submit" value="Iniciar sesión">
          </form>
        </div>

        <div id="register" class="bloque">
          <h3>Regístrate</h3>
          <form action="registro.php" method="post">
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" placeholder="Correo electrónico"/>

            <?php 
              if(isset($_SESSION["errores"])) {
                echo mostrarErrores($_SESSION["errores"], "email");
              }
            ?>

            <label for="user">Usuario</label>
            <input type="text" name="user" id="user" placeholder="Nombre de usuario"/>

            <?php 
              if(isset($_SESSION["errores"])) {
                echo mostrarErrores($_SESSION["errores"], "usuario");
              }
            ?>

            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass" placeholder="Contraseña"/>

            <?php 
              if(isset($_SESSION["errores"])) {
                echo mostrarErrores($_SESSION["errores"], "pass");
              }
            ?>

            <input type="submit" value="Registrarse">
          </form>
        </div>
      </aside>
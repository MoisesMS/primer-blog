<?php
  require_once "./includes/helpers.php";

  session_start();

  if(isset($_POST)) {
    $correo = empty($_POST['email']) ? false : $_POST['email'];
    $usuario = empty($_POST['user']) ? false : $_POST['user'];
    $pass = empty($_POST['pass']) ? false : $_POST['pass'];
  }

  $errores = [];

  if(!empty($usuario) && !is_numeric($usuario)) {
    $usuarioValidado = true;
  } else {
    $usuarioValidado = false;
    $errores["usuario"] = "EL usuario es inválido";
  }

  if(!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $emailValidado = true;
  } else {
    $emailValidado = false;
    $errores["email"] = "No es un email válido";
  }

  if(!empty($pass) && strlen($pass) >= 8) {

    $passValidado = true;

  } else {
    $passValidado = false;
    $errores["pass"] = "La contraseña debe tener como mínimo 8 caracteres";
  }

  if(count($errores) == 0) {
    // TODO REGISTRAR USUARIO EN LA BASE DE DATOS

    borrarErrores();
  } else {
    $_SESSION["errores"] = $errores;
    header("Location: index.php");

  }

?>
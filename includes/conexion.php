<?php
  $conexion = mysqli_connect(
    "localhost",
    "root",
    "root",
    "blog",
    3306);

    mysqli_query($conexion, "SET NAMES 'utf8'");
  
    session_start();
?>
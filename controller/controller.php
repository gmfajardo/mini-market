<?php

require('conexion.php');

$con = new Conexion();

$usuarios = $con ->getUsers();

require('view/view.php');

?>
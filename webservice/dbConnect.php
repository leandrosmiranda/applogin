<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB','faculdade');

$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die('Não foi possível conectar!');
?>
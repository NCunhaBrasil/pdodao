<?php

require_once("config.php");

$root = new Usuario();
$root->loadbyId(12);
echo $root;

?>
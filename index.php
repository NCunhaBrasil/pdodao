<?php

require_once("config.php");
//Carrega apenas um usuario
//$root = new Usuario();
//22 é o id do usuario
//$root->loadbyId(22);
//echo $root;

//Carraga uma lista de usuarios
//$lista = usuario::getList();
//echo json_encode($lista); 

//Carrega uma lista de usuarios buscando pelo login  <-- Não funcionando ainda
//$search = Usuario::search("der");
//echo json_encode($search);


//Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("Anderson","N Cunha");
echo $usuario;

?>
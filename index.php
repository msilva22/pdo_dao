<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "12345");

//echo $usuario;


//Carrega procedure

//criando novo usuario
//$aluno = new Usuario("aluno", "@luno");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@luno");
//$aluno->insert();
//echo $aluno;

//criando novo usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update('professor','prof');

echo $usuario;


?>
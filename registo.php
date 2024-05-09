<?php

$servidor = '127.0.0.1'; //IP do banco
$banco = 'db_campeonato_cs'; //Nome do meu banco
$usuarioBD = 'root'; //Usuário
$senha = ''; //Senha

$conexao = mysqli_connect($servidor, $usuarioBD, $senha, $banco);

//Campos de cadastro
$nomeEquipe = $_POST['nomeDaEquipe'];
$membro1 = $_POST['nomeDo1Membro'];
$membro2 = $_POST['nomeDo2Membro'];
$membro3 = $_POST['nomeDo3Membro'];
$membro4 = $_POST['nomeDo4Membro'];

//Inserção no banco
$sqlGravar = "insert into tb_equipes(nomeDaEquipe, membro1, membro2, membro3, membro4) values ('$nomeEquipe', '$membro1', $membro2, '$membro3', '$membro4')";
mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

header("location: registroDeEquipes.html");

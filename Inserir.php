<?php

$nomeAluno = $_POST['nomeAluno'];
$laboratorio = $_POST['laboratorio'];

/* altere aqui as perguntas do forms*/
$pergunta01 = $_POST['pergunta01'];
$pergunta02 = $_POST['pergunta02'];
$pergunta03 = $_POST['pergunta03'];
$pergunta04 = $_POST['pergunta04']; 

// camada de conexão
include_once("conexao.php");

/* aqui são as variaveis das novas perguntas */
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nomeAluno','$laboratorio','$pergunta01','$pergunta02','$pergunta03','$pergunta04')";
 
/* aqui conexão com o banco*/
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<p class='mensagem-sucesso'>Aviso cadastrado com sucesso!</p>";
?>
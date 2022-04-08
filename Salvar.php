<?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$sexo = $_POST["sexo"];

mysql_connect("localhost","root","");
mysql_select_db("Trabalho");

mysql_query("INSERT INTO Cadastro(cad_id, cad_nome, cad_sobrenome, cad_email, cad_sexo) VALUES(NULL, '$nome', '$sobrenome', '$email','$sexo') ");

mysql_close();
echo"Salvo com sucesso<br/>";
?>
<a href= Principal.html>Voltar</a>

<?php

$id = $_GET["id"];
settype($id,"integer");

mysql_connect("localhost","root","aluno123");
mysql_select_db("banco");

$resultado = mysql_query("select * from tabela where id_tabela = $id");

$dados = mysql_fetch_array($resultado);

if($dados["sexo"] == "M"){
  $checkedM = "checked=\"checked\"";
  $checkedF = "";
}else{
  $checkedM = "";
  $checkedF = "checked=\"checked\"";
}
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head> 
<meta http-equiv="Content-Type"content="text/html; charset=iso-8859-1"/>
<title>Cadastro</title>
</head>
<body>
<form id="form1">
</html>














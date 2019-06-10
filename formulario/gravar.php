<!DOCTYPE html>
<html>
<head>
	<title>Gravar.php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
<?php
if ($_POST) {
$nome=$_POST['nome'];
$email=$_POST['email'];
$mae=$_POST['nome_m'];
$pai=$_POST['nome_p'];
$uni=$_POST['uni'];
$curso=$_POST['curso'];
$nacio=$_POST['nacio'];
$rg=$_POST['rg'];
$org=$_POST['org'];
$d=$_POST['d'];
$cpf=$_POST['cpf'];
$cep=$_POST['cep'];
$uf=$_POST['estado'];
$cid=$_POST['cid'];
$n=$_POST['n'];
$bairro=$_POST['bai'];
$tel=$_POST['tel'];
$cel=$_POST['cel'];
$log=$_POST['log'];
$log1=$_POST['log1'];
$dt1=$_POST['data1'];
$hor=$_POST['hor'];

echo '<div class="row">
		<div class="col-md-8 col-md-offset-2">';
echo "<h3>DADOS PESSOAIS</h3> Nome: $nome <br> E-mail: $email <br> Nome da Mãe: $mae <br> Nome do Pai: $pai <br> Universidade: $uni<br> Curso: $curso<br> Nacionalidade: $nacio";
echo "<h3>DOCUMENTAÇÃO</h3> RG: $rg, Orgão de Expedição: $org, Data de Expedição: $d <br> CPF: $cpf";
echo "<h3> INFORMAÇÃO PARA CONTATO</h3> CEP: $cep <br> UF: $uf, Municipio: $cid<br> Logradouro: $log1 $log, nº $n<br>
Bairro: $bairro<br> Tel: $tel, Cel: $cel";
echo "<h3> HORÁRIO AGENDADO</h3> Dia: $dt1, ás: $hor horas, tolerancia de atraso é de 5 minutos, por favor chegar com 10 minutos de antecedencia. <br> <br>Obrigado";

echo "</div></div>";
}
?>
</body>
</html>
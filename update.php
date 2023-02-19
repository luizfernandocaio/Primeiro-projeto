<?php 
require_once "classes\\Database.php";



		$id = filter_input(INPUT_GET,"id_cliente");
		$nome = filter_input(INPUT_GET,"nome");
		$rg = filter_input(INPUT_GET,"rg");
		$cpf = filter_input(INPUT_GET,"cpf");
		$nasc = filter_input(INPUT_GET,"data_nascimento");
		$sexo = filter_input(INPUT_GET,"sexp");
		$cep = filter_input(INPUT_GET,"cep");
		$logradouro = filter_input(INPUT_GET,"logradouro");
		$numero = filter_input(INPUT_GET,"numero");
		$estado = filter_input(INPUT_GET,"estado");
		$cidade = filter_input(INPUT_GET,"cidade");
		$bairro = filter_input(INPUT_GET,"bairro");
		$telefone = filter_input(INPUT_GET,"telefone");
		$email = filter_input(INPUT_GET,"e_mail");

	if ($link) {
		$query = mysql_query($link, "update cliente set nome="$nome", rg="$rg", cpf="$cpf", nasc="$nasc", sexo="$sexo", cep="$cep", logradouro="$logradouro", numero="$numero", estado="$estado", cidade="$cidade", bairro="$bairro", telefone="$telefone", email="$email" where id="$id" ;" );
		if ($query) {
			header("Location : cadastro.html")
		}else {
			die("Erro: " . mysql_error($link))
		}
	}else {
		die("Erro: " . mysql_error($link))
	}





 ?>
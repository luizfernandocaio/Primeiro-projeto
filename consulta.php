<?php

require_once "classes\\Database.php";

// Redirect
// header("Location: ");

try {
	$database = new Database("root", "", "cadastro", "localhost");

	/*
		$query = "SELECT * FROM cliente WHERE id_cliente = '{$id_cliente}'";
		$resultSet = $database->connection->query($query);
	*/

	$query = "SELECT * FROM cliente";
	$stmt = $database->connection->prepare($query);
	$stmt->execute();
	$resultSet = $stmt->fetchAll(PDO::FETCH_CLASS);

	foreach ($resultSet as $daga) {
		echo "<pre>";
		var_dump($data->nome);
		echo "</pre>";
	}
} catch (Exception $e) {
	echo "<pre>";
	var_dump($e);
}

// SELECT * FROM cliente FROM id_cliente = 1';DETELE FROM cliente;



// $nome =	filter_input (INPUT_POST, 'tnome', FILTER_SANITIZE_STRING);
// $rg = filter_input (INPUT_POST, 'trg', FILTER_SANITIZE_STRING);
// $cpf = filter_input (INPUT_POST,'tcpf', FILTER_SANITIZE_STRING);
// $nasc = filter_input(INPUT_POST, 'tnasc', FILTER_SANITIZE_STRING);
// $sexo = filter_input(INPUT_POST, 'tsexo', FILTER_SANITIZE_STRING);
// $cep = filter_input(INPUT_POST, 'tcep', FILTER_SANITIZE_STRING);
// $rua = filter_input(INPUT_POST, 'trua', FILTER_SANITIZE_STRING);
// $num = filter_input(INPUT_POST, 'tnum', FILTER_SANITIZE_STRING);
// $estado = filter_input(INPUT_POST, 'testado', FILTER_SANITIZE_STRING);
// $cidade = filter_input(INPUT_POST, 'tcidade', FILTER_SANITIZE_STRING);
// $bairro = filter_input(INPUT_POST, 'tbairro', FILTER_SANITIZE_STRING);
// $tel = filter_input(INPUT_POST, 'ttel', FILTER_SANITIZE_STRING);
// $email = filter_input(INPUT_POST, 'temail', FILTER_SANITIZE_EMAIL);

// $result_cliente = "insert into cliente (nome, rg, cpf, data_nascimento, sexo, cep, logradouro, numero, estado, cidade, bairro, telefone, e_email) values ('$nome', '$rg'. '$cpf'. '$nasc', '$sexo', '$cep', '$rua', '$num', '$estado', '$cidade', '$bairro', '$tel', '$email') " ;

// mysql_query($conn, $result_cliente);


?>
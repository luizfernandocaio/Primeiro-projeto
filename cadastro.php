<?php

require_once "classes\\Database.php";

try {
	$database = new Database("root", "", "cadastro", "localhost");

	$query = "INSERT INTO cliente (nome, rg, cpf, data_nascimento, sexo, cep, logradouro, numero, estado, cidade, bairro, telefone, e_mail) VALUES (:nome, :rg, :cpf, :data_nascimento, :sexo, :cep, :logradouro, :numero, :estado, :cidade, :bairro, :telefone, :e_mail)";
	$stmt = $database->connection->prepare($query);
	$stmt->execute(array(
		"nome" => $_POST["tnome"],
		"rg" => $_POST["trg"],
		"cpf" => $_POST["tcpf"],
		"data_nascimento" => $_POST["tnasc"],
		"sexo" => $_POST["tsexo"],
		"cep" => $_POST["tcep"],
		"logradouro" => $_POST["trua"],
		"numero" => $_POST["tnum"],
		"estado" =>$_POST["tuf"],
		"cidade" =>$_POST["tcidade"],
		"bairro" =>$_POST["tbairro"],
		"telefone" =>$_POST["ttel"],
		"e_mail" =>$_POST["temail"],
	));

	// ORM - Doctrine
} catch (Exception $e) {
	echo "<pre>";
	echo ($e);
}
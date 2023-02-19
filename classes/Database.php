<?php

class Database
{
	public $connection;

	public function __construct($user, $password, $database, $host)
	{
		$dsn = "mysql:dbname={$database};host={$host}";
		$this->connection = new PDO($dsn, $user, $password);
	}
}
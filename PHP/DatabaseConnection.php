<?php
/**
 * Created by PhpStorm.
 * User: benedetto
 * Date: 03/01/19
 * Time: 12.09
 */

class DatabaseConnection{

	private $host = "localhost";
	private $username = "user";
	private $password = "1111";
	private $connectionMYSQL = null;

	public function __construct(){
		$this->connectToDatabase("Prova");
	}

	public function DatabaseConnection($host,$username,$password) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
	}

	public function connectToDatabase($database) {
		$this->connectionMYSQL = mysqli_connect($this->host,$this->username,$this->password,$database);
		if (!$this->connectionMYSQL)
			die ("Errore di connessione: " . mysqli_connect_error());
	}

	public function disconnect() {
		if ($this->connectionMYSQL != null)
			$this->connectionMYSQL->close();
	}

	public function getConnection() {
		return $this->connectionMYSQL;
	}

	public function query($query) {
		return mysqli_query($this->connectionMYSQL,$query);
	}

}
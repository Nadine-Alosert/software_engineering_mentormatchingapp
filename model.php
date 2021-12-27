<?php

/* 
Uses Singleton Patten to make sure always get same connection
- Private properties used to check connection
- getInstance check connection othwerwise it creates one
- construct method used to create connection
*/
class Database {  
    private $connection;
    private static $instance; //The single instance
    private $host = "localhost";
    private $username = "majama";
    private $password = "majamagdicx327";
    private $database = "majama";

    // constructor is private to prevent initiation with outer code
	private function __construct() {
        $this->connection = new mysqli(
			$this->host, 
			$this->username, 
			$this->password, 
			$this->database );

        // Handle Connection Error
        if(mysqli_connect_error()) {
            trigger_error("Failed to connect to Database: " . mysql_connect_error(), E_USER_ERROR);
        }
    }

	public static function getInstance() {
		if(!self::$instance) { 
			self::$instance = new self();
		}
		return self::$instance;
	}

    public function getConnection() {
        return $this->connection;
    }

}

function open_database_connection()
{
	$link=new mysqli("localhost","majama","majamagdicx327!","majama");
	$link->query("SET NAMES 'utf8'");
	return $link;
}

function close_database_connection($link)
{
	mysqli_close($link);
}

 ?>
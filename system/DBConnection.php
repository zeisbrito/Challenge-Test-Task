<?php
namespace System;

class DBConnection {
    private $host;
    private $dbname;
    private $password;
    private $username;
    protected $conn;

    public function __construct() {
        require (__DIR__ . '/pdoconfig.php');
        $this->host = $db['host'];
        $this->dbname = $db['dbname'];
        $this->username = $db['username'];
        $this->password = $db['password'];
    }

    public function getConnection() {
        try {
            if(is_null($this->conn)){
                $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
            }
        } catch (\PDOException $pe) {
            
        }
    }
}

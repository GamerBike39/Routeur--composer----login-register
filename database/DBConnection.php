<?php 

namespace Databases;

use PDO;
use PDOException;

class DBConnection {

    private $dbName;
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dbName, string $host, string $username, string $password) {
        $this->dbName = $dbName;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPDO(): PDO {
        if ($this->pdo === null) {
            try {
                $pdo = new PDO("mysql:dbname=$this->dbName;host=$this->host", $this->username, $this->password) ;
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $pdo->exec("SET NAMES 'utf8'");
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return $this->pdo;
    }



}
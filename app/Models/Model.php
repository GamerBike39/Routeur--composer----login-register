<?php 

namespace App\Models;
// require_once '../database/DBconnection.php';
use PDO;
use Databases\DBConnection;

abstract class Model {

    protected $db;
    protected $table;

    public function __construct(DBConnection $db) 
    {
        $this->db = $db;
    }

    public function all(): array
    {
        $stmt = $this->db->getPDO()->query("SELECT * FROM {$this->table}");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        return $stmt->fetchAll();
    }

    public function findById(int $id): Model
    {
        $stmt = $this->db->getPDO()->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    

    


}
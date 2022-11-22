<?php 

namespace App\Controllers;

require_once '../database/DBconnection.php';
use Databases\DBConnection;

class BlogController extends Controller{


    public function welcome() {
        return $this->view('blog.welcome');
    }

    public function index() {
       $stmt = $this->db->getPDO()->query("SELECT * FROM livres Order by id DESC");
        $livres = $stmt->fetchAll();
        return $this->view('blog.index', compact('livres'));
    }

    public function show(int $id) {
     
        $stmt = $this->db->getPDO()->prepare("SELECT * FROM livres WHERE id = ?");
        $livre = $stmt->execute([$id]);
        $livre = $stmt->fetch();
        return $this->view('blog.show',compact('livre'));
    }


}
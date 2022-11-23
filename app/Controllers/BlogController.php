<?php 

namespace App\Controllers;

// require_once '../database/DBconnection.php';
// require_once '../app/Models/Livres.php';
use App\Models\Livres;
// use Databases\DBConnection;

class BlogController extends Controller{


    public function welcome() {
        return $this->view('blog.welcome');
    }

    public function index() {

        $livres = new Livres($this->getDB());
        $livres = $livres->all();

        return $this->view('blog.index', compact('livres'));
    }

    public function show(int $id) {
     
        $livre = new Livres($this->getDB());
        $livre = $livre->findById($id);
        return $this->view('blog.show',compact('livre'));
    }


}
<?php 

namespace App\Models;
require_once 'Model.php';
use App\Models\Model;

class Livres extends Model {


    protected $table = 'livres';

    public function getCreatedAt(): string
     {
        $date = new \DateTime($this->created_at);
        return $date->format('d/m/Y à H:m');
    }

    public function getExcerpt(): string
     {
        return substr($this->desc, 0, 100) . '...';
    }

    public function getButton(): string
    {
        return <<<HTML
        <a href="post/$this->id" class="btn btn-primary">Lire l'article</a>
HTML;
    }

    // public function getTags(): array
    // {
    //     $stmt = $this->db->getPDO()->prepare("SELECT tags.* FROM tags JOIN posts_tags ON tags.id = posts_tags.tag_id WHERE posts_tags.post_id = :id");
    //     $stmt->execute(['id' => $this->id]);
    //     return $stmt->fetchAll(\PDO::FETCH_CLASS, Tag::class, [$this->db]);
    // }



}
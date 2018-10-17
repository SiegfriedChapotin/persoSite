<?php
/**
 * Created by PhpStorm.
 * User: siegf_000
 * Date: 15/10/2018
 * Time: 13:46
 */

namespace App\Table;
use Core\Table\Table;

class PostTable extends Table
{

    protected  $table='posts';
    /**
     * Récupére les derniers posts
     * return array
     */
    public function last(){

        return $this->query("SELECT posts.id, posts.title, posts.content, posts.date, categories.title as category FROM " . $this->table . " LEFT JOIN categories ON category_id = categories.id ORDER BY posts.date DESC LIMIT 5");
    }

    /**
     * @param $category_id
     * @return mixed
     */
    public function lastByCategory($category_id){

        return $this->query("
          SELECT posts.id, posts.title,posts.content,posts.date,categories.title as categorie
          FROM . $this->table . 
          LEFT JOIN categories  ON category_id = categories.id
          WHERE posts.categoriy_id=?,
          ORDER BY posts.date DESC [$category_id]");
    }

    public function find($id){

        return $this->query("
          SELECT posts.id, posts.title,posts.content,posts.date,categories.title as categorie
          FROM . $this->table .
          LEFT JOIN categories  ON category_id = categories.id
          WHERE posts.id=?, [$id],true");
    }


}
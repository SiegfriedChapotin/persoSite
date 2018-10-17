<?php
/**
 * Created by PhpStorm.
 * User: siegf_000
 * Date: 15/10/2018
 * Time: 19:38
 */

namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity{

    public function getUrl() {
        return 'index.php?p=posts.show&id=' . $this->id;
    }

    public function getExtract() {

        $html = '<p>' . substr($this->content, 0, 600) . '</p>';
        $html .= '<p> <a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }
}
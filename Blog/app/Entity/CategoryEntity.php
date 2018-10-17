<?php
/**
 * Created by PhpStorm.
 * User: siegf_000
 * Date: 15/10/2018
 * Time: 19:38
 */

namespace App\Entity;

use Core\Entity\Entity;

class CategoryEntity extends Entity
{

    public function getUrl()
    {
        return 'index.php?p=posts.category&id=' . $this->id;
    }

}
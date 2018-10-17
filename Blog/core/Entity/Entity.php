<?php
/**
 * Created by PhpStorm.
 * User: siegf_000
 * Date: 16/10/2018
 * Time: 08:47
 */

namespace Core\Entity;


class Entity{
    public function __getKey($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
}
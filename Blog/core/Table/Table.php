<?php
/**
 * Created by PhpStorm.
 * User: siegf_000
 * Date: 15/10/2018
 * Time: 13:46
 */

namespace Core\Table;

use Core\Database\Database;


class Table
{
    protected $table;
    protected $db;


    /**
     * Table constructor.
     */


    public function __construct(Database $db)
    {
        $this->db = $db;
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    /**
     * Tout récupérer d'une table
     * @return array
     */
    public function all()
    {
        return $this->query('SELECT * FROM ' . $this->table );
    }

    /**
     * Trouver via l'id
     * @param  int $id
     * @return object
     */
    public function find($id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }
    /**
     * Récupére les requêtes
     * @param  string  $statement
     * @param  string  $attributes
     * @param  boolean $one Récupére une ou plusieurs lignes
     * @return array|object
     */
    public function query($statement, $attributes = null, $one = false)
    {
        if ($attributes) {
            return $this->db->prepare($statement, $attributes, str_replace('Table', 'Entity', get_class($this)), $one);
        } else {
            return $this->db->query($statement, str_replace('Table', 'Entity', get_class($this)), $one);
        }
    }


}


<?php

namespace Core\Database;

use PDO;

class QueryBuilder
{
    private $db;

    public function __construct(PDO $db)
    {

        $this->db = $db;
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->db->query($sql);
        
        return $stmt->fetchAll();
    }

    public function insert($table, array $fields)
    {
        $keys = array_keys($fields);

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', $keys),
            ':' .implode(', :', $keys)
        );

        $stmt = $this->db->prepare($sql);
        dump($fields, $keys, $sql, $stmt);
        return $stmt->execute($fields);
    }
}
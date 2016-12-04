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
        return $stmt->execute($fields);
    }

    public function delete($table, array $fields, $op='AND')
    {
        $keys = array_keys($fields);
        
        $sql = sprintf(
                'DELETE FROM %s WHERE %s',
            $table,
            implode(" = ? $op ", $keys) . ' = ? '
        );

        $stmt = $this->db->prepare($sql);

        return $stmt->execute(array_values($fields));
    }

    public function update($table, $setFields, $whereFields, $op='AND')
    {
        $keys = array_keys($whereFields);
        $set = implode(', ', array_map(function ($v, $k) {
            return sprintf("%s='%s'", $k, $v);
        }, array_values($setFields), array_keys($setFields)));

        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            $set,
            implode(" = ? $op ", $keys) . ' = ? '
        );

        $stmt = $this->db->prepare($sql);

        return $stmt->execute(array_values($whereFields));
    }
}
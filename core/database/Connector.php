<?php

namespace Core\Database;


use PDO;

class Connector
{
    public static function create($config)
    {
        try{
            return new PDO(
                $config['connection'], 
                $config['user'], 
                $config['password'], 
                $config['options']
            );
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }
}
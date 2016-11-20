<?php

class Tasks
{
    const DB_NAME = 'db.sqlite';
    private $db;

    public function __construct()
    {
        $this->db = new SQLite3(static::DB_NAME);

        if(filesize(static::DB_NAME) == 0){
            $sql = "create table tasks (id integer PRIMARY KEY, title, complete integer)";
            $this->db->exec($sql);
        }
    }

    public function __destruct()
    {
        $this->db->close();
    }

    public function getAllTasks()
    {
        $sql = "SELECT * FROM tasks";

        $res = $this->db->query($sql);

        return $this->fetchData($res);
    }

    public function insertTask($title)
    {
        $title = $this->db->escapeString($title);
        $complete = abs((int) $_POST['complete']);

        $sql = "INSERT INTO tasks VALUES (null, '$title', $complete)";

        return $this->db->exec($sql);
    }

    private function fetchData($res)
    {
        $tasks = [];

        while($item = $res->fetchArray(SQLITE3_ASSOC)){
            // array_push($tasks, $item);
            $tasks[] =  $item;
        }

        return $tasks;
    }

    public function setComplete($id)
    {
        $sql = "UPDATE tasks SET complete=1 WHERE id = $id";
        
        return $this->db->exec($sql);
    }
}
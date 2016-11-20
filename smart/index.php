<?php 

class Tasks
{
    const DB_NAME = 'db.sqlite';
    private $db;

    public function __construct()
    {
        $this->db = new SQLite3(static::DB_NAME);
        
        if(filesize(static::DB_NAME) == 0){
            $sql = "create table tasks (id integer PRIMARY KEY, title)";
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
        $sql = "INSERT INTO tasks VALUES (null, '$title')";
        
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
}

$tasks = new Tasks();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    
    $tasks->insertTask($title);
}

require_once "index.view.php";
<?php

require_once "Task.php";

$tasks = new Tasks();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    
    $tasks->insertTask($title);

    header('Location: /');
}

if(isset($_GET['id'])){
    $tasks->setComplete((int) $_GET['id']);

    header('Location: /');
}

require_once "index.view.php";
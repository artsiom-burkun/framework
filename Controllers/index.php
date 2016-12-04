<?php

$tasks = $app['query']->selectAll('tasks');

if (isset ($_POST['name'])) {
    $addTasks = htmlspecialchars($_POST['name']);
    $app['query']->insert('tasks', [
        'title' => $addTasks,
        'complete' => true

    ]);
    $tasks = $app['query']->selectAll('tasks');
};
dump($addTasks);

require "Views/index.view.php";
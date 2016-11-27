<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Задачи</h1>

<ul>
<?php foreach($tasks as $task): ?>
    <li><?= $task->title ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
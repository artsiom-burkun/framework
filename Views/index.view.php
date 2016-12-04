<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Задачи</h1>

<ul>
<form action="/add" method="post">
    <input type="text" name="task">
    <input type="submit">
</form>
<?php foreach($tasks as $task): ?>
    <li>
        <?php if($task->complete == 1): ?>
            <s><?= $task->title ?></s>
        <?php else: ?>
            <?= $task->title ?>
        <?php endif; ?>
        
        <a style="font-size: 40%" href="/task/remove?taskid=<?= $task->id ?>">Удалить</a>
        <a style="font-size: 40%" href="/task/update?taskid=<?= $task->id ?>">Сделать</a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
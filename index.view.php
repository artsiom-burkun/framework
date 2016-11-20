<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
<input type="hidden" value="0" name="complete">
<input type="text" name="title">
<button>click</button>
</form>

<ul>
    <?php foreach($tasks->getAllTasks() as $task): ?>
        <?php if(! $task['complete']): ?>
            <li>
                <strong><?= $task['title'] ?></strong>
            </li>
            <a href="?id=<?= $task['id'] ?>">сделал</a>
        <?php else: ?>
            <li><strike><?= $task['title'] ?></strike></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

</body>
</html>
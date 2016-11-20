<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="title">
    <button>click</button>
</form>

<ul>
    <?php foreach($tasks->getAllTasks() as $task): ?>
        <li><?= $task['title'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
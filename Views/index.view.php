<!DOCTYPE html>
<html lang="en">
<head>

    <title>Свой фреймворк</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <![endif]-->
</head>

<body>

<div class="container" style="display: block;">

    <div class="starter-template">
        <h1>Задачи:</h1>
        <ul>
            <?php foreach($tasks as $task): ?>
                <li><?= $task->title ?></li>
            <?php endforeach; ?>
        </ul>
        <h1>Добавить задачу:</h1>
        <form class="navbar-form navbar-left" action="/" method="post">
            <div class="form-group">
                <input placeholder="Задача" class="form-control" type="text" name="name">
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>

<body>
    <?php require('partials/nav.php') ?>
    <ul>
        <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
            <span class="icon">&#9989;</span>
            <?php else: ?>
            <?= $task->description; ?>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
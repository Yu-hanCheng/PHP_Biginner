<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
    </style>
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
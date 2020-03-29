<?php require('partials/head.php') ?>

<form action="/names" method="get">
    <input name="name"></input>
    <button type="submit">submit</button>
</form>

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

<?php require('partials/footer.php') ?>
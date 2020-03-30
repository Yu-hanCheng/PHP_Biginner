<?php require('partials/head.php') ?>

<?php foreach($users as $user): ?>
    <li><?= $user->name ?></li>
<?php endforeach ?>

<form action="/names" method="post">
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
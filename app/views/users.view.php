<?php require('partials/head.php') ?>

<?php foreach($users as $user): ?>
    <li><?= $user->name ?></li>
<?php endforeach ?>

<form action="/users" method="post">
    <input name="name"></input>
    <button type="submit">submit</button>
</form>

<?php require('partials/footer.php') ?>
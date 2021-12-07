<?php require_once 'header.html.php'; ?>
<?php if (!empty($error_messages)) : ?>
<ul>
    <?php foreach ($error_messages as $message) : ?>
    <li><?= $message ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<form action="" method="post">
    <label for="title">Game title : </label>
    <input type="text" name="title" id="title">
    <label for="title">Minimum players : </label>
    <input type="number" name="min_players" id="min_players">
    <label for="title">Maximum players : </label>
    <input type="number" name="max_players" id="max_players">
    <button type="submit">Submit </button>
</form>
<?php require_once 'footer.html.php'; ?>
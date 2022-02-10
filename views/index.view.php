<?php require "views/partials/heading.php" ?>

    <?php foreach($tasks as $task): ?>
        <?php if($task->complete): ?>
            <?= "<strike>$task->description</strike><br />" ?>
        <?php else: ?>
          <?= "$task->description <br />" ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <h1>Submit your name</h1>
    <form action="/names" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>

<?php require "views/partials/footer.php" ?>
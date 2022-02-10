<?php require "views/partials/heading.php" ?>

    <h1>To Do Tasks</h1>
    <hr>
    <?php foreach($tasks as $task): ?>
        <?php if($task->complete): ?>
            <?= "<strike>$task->description</strike><br />" ?>
        <?php else: ?>
          <?= "$task->description <br />" ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <h1>Submit your Tasks</h1>
    <form action="/add-task" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>

<?php require "views/partials/footer.php" ?>
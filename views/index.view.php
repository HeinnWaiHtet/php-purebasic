<?php require "views/partials/heading.php" ?>

    <?php foreach($tasks as $task): ?>
        <?php if($task->complete): ?>
            <?= "<strike>$task->description</strike><br />" ?>
        <?php else: ?>
          <?= "$task->description <br />" ?>
        <?php endif; ?>
    <?php endforeach; ?>

<?php require "views/partials/footer.php" ?>
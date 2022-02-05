<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($tasks as $task): ?>
        <?php if($task->complete): ?>
            <?= "<strike>$task->description</strike><br />" ?>
        <?php else: ?>
          <?= "$task->description <br />" ?>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>
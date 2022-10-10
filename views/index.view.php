<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL Connection</title>
</head>
<body>
  <?php include 'nav.php' ?>

  <h1>All Tasks</h1>

  <h2>Submit your name</h2>

  <form action="/names" method="POST">
    <input type="text" name="name"></input>
    <button type="submit">Submit</button>
  </form>

  <ul>
    <?php foreach($tasks as $task) : ?>

        <?php if($task->isComplete() == 1) : ?>
          <li><strong>&#x2713; true</strong>, <?= $task->getDescription() ?></li>
        <?php else: ?>
          <li><s><?php echo '&#x58; false, ' . $task->getDescription() ?></s></li>
        <?php endif; ?>

    <?php endforeach; ?>
  </ul>

  <ul>
    <?php foreach($names as $name) : ?>
      <li><strong>&#x272A; true</strong>, <?= $name->getName() ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
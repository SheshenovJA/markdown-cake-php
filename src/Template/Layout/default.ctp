
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markdown.site</title>
    <?= $this->Html->meta('icon') ?>




    <?= $this->fetch('css') ?>

</head>
<body>

    <?= $this->Flash->render() ?>


    <?= $this->fetch('content') ?>


    <footer>
    </footer>

    <?= $this->fetch('script') ?>
</body>
</html>

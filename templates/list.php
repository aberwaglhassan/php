<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>presentation du code</title>
</head>
<body>
        <h1>liste des posts</h1>
        <ul>
            <?php foreach ($posts as $articles): ?>
            <li>
                <a href="detailController.php?id=<?=$articles['id']?>">
                    <?= $articles['title']?>
                </a>

            <?php endforeach ?>
        </ul>
</body>
</html>
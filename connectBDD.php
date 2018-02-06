<?php
// index.php
$link = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8",'blog_db', '');
$result = $link->query('SELECT id, title FROM articles'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        List of Posts
    </title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Liste des articles</h1>
<ul>
    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)):?>
    <li>
        <a href="/PHPVINCENT/show.php?id=<?=$row['id'] ?>"><?=$row['title']?> </a>
    </li>
    <?php endwhile ?>
</ul>
</body>
</html>
<?php
    $link = null;
?>

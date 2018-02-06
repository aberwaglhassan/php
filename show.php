<?php
// index.php
$link = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8",'blog_db', '');



?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>
            exophp
        </title>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1>Liste des articles</h1>

        <?php

        $query = 'SELECT title, description FROM articles WHERE  id=:id';
        $statement=$link->prepare($query);
        $statement->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
        $statement->execute();

        $row=$statement->fetch(PDO::FETCH_ASSOC);?>

                 <?=$row['description']?>



    </body>
    </html>
<?php
$link = null;
?>
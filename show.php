<?php

$link = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8",'blog_db', '');





        $query = 'SELECT title, description FROM articles WHERE  id=:id';
        $statement=$link->prepare($query);
        $statement->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
        $statement->execute();

        $row=$statement->fetch(PDO::FETCH_ASSOC);




require 'templates/detail.php';
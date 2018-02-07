<?php
//le model
function open_database_connection()
{
    $link = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8", 'blog_db', '');

    return $link;
}
function close_database_connection(&$link){
    $link=null;
}
function get_all_articles()
{

    $link = open_database_connection();
    $result = $link->query('SELECT id, title FROM articles');

    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }

    return $posts;
}
function get_description(){
    $link=open_database_connection();
    $query = 'SELECT title, description,cree_le FROM articles WHERE  id=:id';
    $statement=$link->prepare($query);
    $statement->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $statement->execute();

    $row=$statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}